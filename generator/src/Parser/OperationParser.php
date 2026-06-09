<?php

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Generator\Parser;

use FoundryCo\Cloudflare\Generator\Ir\IrDto;
use FoundryCo\Cloudflare\Generator\Ir\IrOperation;
use FoundryCo\Cloudflare\Generator\Ir\IrParameter;
use FoundryCo\Cloudflare\Generator\Ir\IrProperty;

class OperationParser
{
    private const BASE_NAMESPACE = 'Foundry\\Cloudflare';

    public function __construct(
        private readonly SchemaParser $schemaParser,
    ) {}

    /**
     * @return IrOperation[]
     */
    public function parseAll(array $spec): array
    {
        $operations = [];

        foreach ($spec['paths'] ?? [] as $path => $pathItem) {
            foreach (['get', 'post', 'put', 'patch', 'delete'] as $httpMethod) {
                if (!isset($pathItem[$httpMethod])) {
                    continue;
                }

                $op = $pathItem[$httpMethod];
                $tag = $op['tags'][0] ?? 'Misc';
                $operationId = $op['operationId'] ?? $httpMethod . '-' . str_replace('/', '-', $path);

                [$pathParams, $queryParams] = $this->parseParameters($op['parameters'] ?? [], $tag, $operationId);

                $requestClass  = $this->parseRequestBody($op, $tag, $operationId);
                [$responseClass, $isPaginated] = $this->parseResponse($op, $tag, $operationId);

                $operations[] = new IrOperation(
                    operationId: $operationId,
                    method: strtoupper($httpMethod),
                    path: $path,
                    tag: $tag,
                    methodName: $this->deriveMethodName($operationId, $httpMethod, $path),
                    summary: $op['summary'] ?? '',
                    pathParams: $pathParams,
                    queryParams: $queryParams,
                    requestClass: $requestClass,
                    responseClass: $responseClass,
                    isPaginated: $isPaginated,
                );
            }
        }

        return $operations;
    }

    /**
     * @return array{IrParameter[], IrParameter[]}
     */
    private function parseParameters(array $params, string $tag, string $opId): array
    {
        $path  = [];
        $query = [];

        foreach ($params as $param) {
            $schema  = $param['schema'] ?? [];
            $name    = $param['name'];
            $isPath  = ($param['in'] === 'path');
            $required = $param['required'] ?? $isPath;

            // Skip scope parameters — injected by client automatically
            if (in_array($name, ['zone_id', 'account_id'])) {
                continue;
            }

            $phpType = $this->schemaParser->phpType($schema, $this->toPascalCase($tag) . $this->toPascalCase($name));

            $irParam = new IrParameter(
                name: $this->toCamelCase($name),
                phpType: $phpType,
                required: $required,
                isPath: $isPath,
                description: $param['description'] ?? null,
                default: $schema['default'] ?? null,
            );

            if ($isPath) {
                $path[] = $irParam;
            } else {
                $query[] = $irParam;
            }
        }

        return [$path, $query];
    }

    private function parseRequestBody(array $op, string $tag, string $opId): ?string
    {
        $requestBody = $op['requestBody'] ?? null;
        if (!$requestBody) {
            return null;
        }

        $schema = $requestBody['content']['application/json']['schema'] ?? null;
        if (!$schema) {
            return null;
        }

        // Name the request DTO from the operationId
        $hint = $this->operationIdToRequestHint($opId);
        $namespace = self::BASE_NAMESPACE . '\\Requests';
        $name = $this->toPascalCase($hint) . 'Request';
        $fqn = $namespace . '\\' . $name;

        // Parse properties from the schema
        $properties = $this->flattenProperties($schema);
        $required   = $this->flattenRequired($schema);

        if (empty($properties)) {
            return null;
        }

        $irProperties = [];
        $uses = [];

        foreach ($properties as $jsonKey => $propSchema) {
            $isRequired = in_array($jsonKey, $required);
            $phpName    = $this->toCamelCase($jsonKey);
            $phpType    = $this->schemaParser->phpType(
                $propSchema,
                $name . $this->toPascalCase($jsonKey),
                !$isRequired
            );

            if (str_starts_with($phpType, '?\\') || str_starts_with($phpType, '\\')) {
                $uses[] = ltrim(ltrim($phpType, '?'), '\\');
            }

            $irProperties[] = new IrProperty(
                name: $phpName,
                serializedName: $jsonKey,
                phpType: ltrim(ltrim($phpType, '?'), '\\'),
                nullable: !$isRequired,
                readOnly: false,
                description: $propSchema['description'] ?? null,
                default: $propSchema['default'] ?? null,
                hasDefault: !$isRequired,
            );
        }

        // Sort: required properties first
        usort($irProperties, fn ($a, $b) => $a->nullable <=> $b->nullable);

        $this->schemaParser->addDto(new IrDto(
            name: $name,
            namespace: $namespace,
            properties: $irProperties,
            uses: array_unique($uses),
            description: $op['summary'] ?? null,
            isRequest: true,
        ));

        return '\\' . $fqn;
    }

    /**
     * @return array{?string, bool}  [responseClass, isPaginated]
     */
    private function parseResponse(array $op, string $tag, string $opId): array
    {
        $response = $op['responses']['200'] ?? $op['responses']['201'] ?? null;
        if (!$response) {
            return [null, false];
        }

        $schema = $response['content']['application/json']['schema'] ?? null;
        if (!$schema) {
            return [null, false];
        }

        // Detect pagination: response has result_info in its allOf properties
        $isPaginated = $this->detectsPagination($schema);

        // Extract the result schema (unwrap the envelope)
        $resultSchema = $this->extractResultSchema($schema);
        if (!$resultSchema) {
            return [null, false];
        }

        // If result is an array, unwrap the item type
        if (($resultSchema['type'] ?? '') === 'array' && isset($resultSchema['items'])) {
            $resultSchema = $resultSchema['items'];
        }

        $hint = $this->operationIdToResponseHint($opId, $tag);
        $type = $this->schemaParser->phpType($resultSchema, $hint);

        if (in_array($type, ['string', 'int', 'float', 'bool', 'mixed', 'array'])) {
            return [null, false];
        }

        return [$type, $isPaginated];
    }

    private function detectsPagination(array $schema): bool
    {
        if (!isset($schema['allOf'])) {
            return false;
        }
        foreach ($schema['allOf'] as $entry) {
            if (isset($entry['properties']['result_info'])) {
                return true;
            }
        }
        return false;
    }

    private function extractResultSchema(array $schema): ?array
    {
        // Direct result property
        if (isset($schema['properties']['result'])) {
            return $schema['properties']['result'];
        }

        // allOf: look for result property in any entry
        if (isset($schema['allOf'])) {
            foreach ($schema['allOf'] as $entry) {
                if (isset($entry['properties']['result'])) {
                    return $entry['properties']['result'];
                }
            }
        }

        return null;
    }

    private function flattenProperties(array $schema): array
    {
        $props = $schema['properties'] ?? [];

        if (isset($schema['allOf'])) {
            foreach ($schema['allOf'] as $entry) {
                $props = array_merge($props, $entry['properties'] ?? []);
            }
        }

        return $props;
    }

    private function flattenRequired(array $schema): array
    {
        $required = $schema['required'] ?? [];

        if (isset($schema['allOf'])) {
            foreach ($schema['allOf'] as $entry) {
                $required = array_merge($required, $entry['required'] ?? []);
            }
        }

        return $required;
    }

    /**
     * Derive a clean method name from operationId.
     *
     * Strategy:
     * - GET  with no non-scope path params → list()
     * - GET  with non-scope path params    → get()
     * - POST                               → create()
     * - PUT / PATCH                        → update()
     * - DELETE                             → delete()
     *
     * For non-CRUD operations, use the operationId stripped of the tag prefix, camelCased.
     */
    private function deriveMethodName(string $operationId, string $method, string $path): string
    {
        $hasIdParam = $this->pathHasNonScopeIdParam($path);

        $crud = match ($method) {
            'get'    => $hasIdParam ? 'get' : 'list',
            'post'   => 'create',
            'put', 'patch' => 'update',
            'delete' => 'delete',
            default  => null,
        };

        // If the operationId ends with a recognisable verb, honour it directly
        $lower = strtolower($operationId);
        foreach (['list', 'get', 'create', 'update', 'edit', 'delete', 'patch'] as $verb) {
            if (str_contains($lower, $verb) && $verb !== 'get' && $verb !== 'list') {
                // Non-standard verb — use operationId-derived name
                return $crud ?? $this->operationIdToMethodName($operationId);
            }
        }

        if ($crud) {
            return $crud;
        }

        return $this->operationIdToMethodName($operationId);
    }

    private function pathHasNonScopeIdParam(string $path): bool
    {
        preg_match_all('/\{([^}]+)\}/', $path, $matches);
        foreach ($matches[1] as $param) {
            if (!in_array($param, ['zone_id', 'account_id'])) {
                return true;
            }
        }
        return false;
    }

    private function operationIdToMethodName(string $operationId): string
    {
        // "zones-get" → "list", "zones-zone-details" → "details"
        // Strip tag prefix by removing the first segment
        $parts = preg_split('/[-_]/', $operationId);
        if (count($parts) <= 1) {
            return $this->toCamelCase($operationId);
        }

        // Drop segments that match common tag words to find the verb
        $last = array_pop($parts);
        return $this->toCamelCase($last);
    }

    private function operationIdToRequestHint(string $operationId): string
    {
        return $this->toPascalCase($operationId);
    }

    private function operationIdToResponseHint(string $operationId, string $tag): string
    {
        // Prefer a name derived from the tag + last segment of operation
        return $this->toPascalCase($tag) . $this->toPascalCase($this->operationIdToMethodName($operationId));
    }

    private function toPascalCase(string $str): string
    {
        $str = preg_replace('/[-_ ]+/', ' ', $str);
        $str = ucwords($str);
        $str = str_replace(' ', '', $str);
        return preg_replace('/[^a-zA-Z0-9]/', '', $str);
    }

    private function toCamelCase(string $str): string
    {
        return lcfirst($this->toPascalCase($str));
    }
}
