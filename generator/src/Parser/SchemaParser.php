<?php

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Generator\Parser;

use FoundryCo\Cloudflare\Generator\Ir\IrDto;
use FoundryCo\Cloudflare\Generator\Ir\IrEnum;
use FoundryCo\Cloudflare\Generator\Ir\IrProperty;

/**
 * Converts an OpenAPI schema node into a PHP type string.
 * As a side effect, registers new IrEnum and IrDto objects for emission.
 */
class SchemaParser
{
    private const BASE_NAMESPACE = 'FoundryCo\\Cloudflare';

    /** @var IrEnum[] keyed by FQN */
    private array $enums = [];

    /** @var IrDto[] keyed by FQN */
    private array $dtos = [];

    /** Track schemas currently being parsed to avoid infinite recursion */
    private array $inProgress = [];

    public function getEnums(): array { return $this->enums; }
    public function getDtos(): array  { return $this->dtos; }

    public function addDto(IrDto $dto): void
    {
        $this->dtos[$dto->fqn()] = $dto;
    }

    /**
     * Parse a schema node and return its PHP type string.
     * $hint is used to name anonymous schemas (e.g. the schema key from components/schemas).
     */
    public function phpType(array $schema, string $hint = '', bool $nullable = false): string
    {
        $type = $this->resolveType($schema, $hint);
        return $nullable && !str_ends_with($type, 'null') ? "?{$type}" : $type;
    }

    /**
     * Handle oneOf / anyOf. If every branch is an enum (or the schema itself has 'enum'),
     * merge all cases into a single enum. Otherwise return mixed.
     */
    private function resolvePolyType(array $branches, string $hint): string
    {
        $allCases = [];
        $backingType = 'string';

        foreach ($branches as $branch) {
            if (!empty($branch['enum'])) {
                foreach ($branch['enum'] as $case) {
                    $allCases[] = (string) $case;
                }
                if (($branch['type'] ?? 'string') === 'integer') {
                    $backingType = 'int';
                }
            } else {
                // Non-enum branch — can't model as a single enum, use mixed
                return 'mixed';
            }
        }

        if (empty($allCases)) {
            return 'mixed';
        }

        $allCases = array_values(array_unique($allCases));
        $name = $this->schemaHintToClassName($hint);
        if (empty($name)) {
            return 'string';
        }

        $namespace = self::BASE_NAMESPACE . '\\Enums';
        $fqn = $namespace . '\\' . $name;

        if (!isset($this->enums[$fqn])) {
            $this->enums[$fqn] = new IrEnum(
                name: $name,
                namespace: $namespace,
                backingType: $backingType,
                cases: $allCases,
            );
        }

        return '\\' . $fqn;
    }

    private function resolveType(array $schema, string $hint): string
    {
        // allOf: merge all schemas into one DTO
        if (isset($schema['allOf'])) {
            return $this->resolveAllOf($schema['allOf'], $schema['properties'] ?? [], $hint);
        }

        // oneOf / anyOf: if all branches are enums, merge their cases into one enum.
        // Otherwise fall back to mixed.
        if (isset($schema['oneOf']) || isset($schema['anyOf'])) {
            return $this->resolvePolyType($schema['oneOf'] ?? $schema['anyOf'], $hint);
        }

        $type = $schema['type'] ?? 'object';

        // Enum
        if (!empty($schema['enum'])) {
            return $this->registerEnum($schema, $hint);
        }

        return match ($type) {
            'string'  => $this->resolveString($schema),
            'integer' => 'int',
            'number'  => 'float',
            'boolean' => 'bool',
            'array'   => $this->resolveArray($schema, $hint),
            'object'  => $this->resolveObject($schema, $hint),
            default   => 'mixed',
        };
    }

    private function resolveString(array $schema): string
    {
        return match ($schema['format'] ?? '') {
            'date-time', 'date' => '\DateTimeImmutable',
            default             => 'string',
        };
    }

    private function resolveArray(array $schema, string $hint): string
    {
        if (!isset($schema['items'])) {
            return 'array';
        }

        $itemType = $this->resolveType($schema['items'], $hint . 'Item');

        // Only annotate as typed array if it's a class (not scalar/mixed)
        if (in_array($itemType, ['string', 'int', 'float', 'bool', 'mixed', 'array'])) {
            return 'array';
        }

        // Return short class name with docblock handled by caller
        return $itemType . '[]';
    }

    private function resolveObject(array $schema, string $hint): string
    {
        if (empty($schema['properties'])) {
            return 'array'; // untyped object → array
        }

        return $this->registerDto($schema, $hint, $schema['properties'], $schema['required'] ?? []);
    }

    private function resolveAllOf(array $allOf, array $extraProps, string $hint): string
    {
        $merged = ['properties' => [], 'required' => []];

        foreach ($allOf as $entry) {
            $this->mergeSchemaProperties($entry, $merged);
        }

        // Merge any properties defined alongside allOf
        if (!empty($extraProps)) {
            $merged['properties'] = array_merge($merged['properties'], $extraProps);
        }

        if (empty($merged['properties'])) {
            return 'mixed';
        }

        return $this->registerDto($merged, $hint, $merged['properties'], $merged['required']);
    }

    /**
     * Recursively extract all properties from a schema node, following
     * allOf, anyOf, and oneOf at any nesting depth. First occurrence of a
     * key wins so more-specific types aren't overwritten by base types.
     *
     * $refs are already fully resolved by SpecLoader before we get here.
     */
    private function mergeSchemaProperties(array $schema, array &$merged): void
    {
        if (!empty($schema['properties'])) {
            foreach ($schema['properties'] as $key => $propSchema) {
                if (!isset($merged['properties'][$key])) {
                    $merged['properties'][$key] = $propSchema;
                } elseif (!empty($propSchema['enum']) && !empty($merged['properties'][$key]['enum'])) {
                    // Merge enum values across discriminated branches (e.g. DNS record `type`)
                    $merged['properties'][$key]['enum'] = array_values(array_unique(
                        array_merge($merged['properties'][$key]['enum'], $propSchema['enum'])
                    ));
                }
            }
        }
        if (!empty($schema['required'])) {
            $merged['required'] = array_merge($merged['required'], $schema['required']);
        }

        foreach ($schema['allOf'] ?? [] as $entry) {
            $this->mergeSchemaProperties($entry, $merged);
        }

        foreach (array_merge($schema['anyOf'] ?? [], $schema['oneOf'] ?? []) as $branch) {
            $this->mergeSchemaProperties($branch, $merged);
        }
    }

    private function registerEnum(array $schema, string $hint): string
    {
        $name = $this->schemaHintToClassName($hint);
        if (empty($name)) {
            return 'string'; // can't name it — fall back to scalar
        }

        $backingType = ($schema['type'] ?? 'string') === 'integer' ? 'int' : 'string';
        $namespace = self::BASE_NAMESPACE . '\\Enums';
        $fqn = $namespace . '\\' . $name;

        if (!isset($this->enums[$fqn])) {
            $this->enums[$fqn] = new IrEnum(
                name: $name,
                namespace: $namespace,
                backingType: $backingType,
                cases: array_map('strval', $schema['enum']),
            );
        }

        return '\\' . $fqn;
    }

    private function registerDto(array $schema, string $hint, array $properties, array $required): string
    {
        $name = $this->schemaHintToClassName($hint);
        if (empty($name)) {
            return 'array';
        }

        $namespace = self::BASE_NAMESPACE . '\\Responses';
        $fqn = $namespace . '\\' . $name;

        // Avoid infinite recursion
        if (isset($this->inProgress[$fqn])) {
            return '\\' . $fqn;
        }

        if (isset($this->dtos[$fqn])) {
            return '\\' . $fqn;
        }

        $this->inProgress[$fqn] = true;

        $irProperties = [];
        $uses = [];

        foreach ($properties as $jsonKey => $propSchema) {
            $jsonKey = (string) $jsonKey;
            // Skip internal envelope keys — consumers see unwrapped result
            if (in_array($jsonKey, ['success', 'errors', 'messages', 'result_info'])) {
                continue;
            }

            $isRequired  = in_array($jsonKey, $required);
            $phpName     = $this->toCamelCase($jsonKey);
            $propHint    = $name . $this->toPascalCase($jsonKey);
            $phpType     = $this->resolveType($propSchema, $propHint);
            $isNullable  = !$isRequired;
            $isReadOnly  = $propSchema['readOnly'] ?? false;

            // Collect use statements for non-scalar types
            if (str_starts_with($phpType, '\\')) {
                $uses[] = ltrim($phpType, '\\');
            }

            $irProperties[] = new IrProperty(
                name: $phpName,
                serializedName: $jsonKey,
                phpType: ltrim($phpType, '\\'),
                nullable: $isNullable,
                readOnly: $isReadOnly,
                description: $propSchema['description'] ?? null,
                default: null,
                hasDefault: $isNullable,
            );
        }

        unset($this->inProgress[$fqn]);

        // Required (non-nullable) properties must come before optional (nullable) ones
        usort($irProperties, fn ($a, $b) => $a->nullable <=> $b->nullable);

        $this->dtos[$fqn] = new IrDto(
            name: $name,
            namespace: $namespace,
            properties: $irProperties,
            uses: array_unique($uses),
            description: $schema['description'] ?? null,
            isRequest: false,
        );

        return '\\' . $fqn;
    }

    /**
     * Convert a schema hint (e.g. "zones_zone", "dns-records_dns-record-post") to a PascalCase class name.
     * The hint format is either a raw schema key or a generated hint like "ZoneAccount".
     */
    public function schemaHintToClassName(string $hint): string
    {
        if (empty($hint)) {
            return '';
        }

        // If it looks like a schema key (contains _ separating namespace from name)
        // e.g. "zones_zone" → strip "zones_" prefix → "zone" → "Zone"
        // e.g. "dns-records_dns-record-post" → strip "dns-records_" → "dns-record-post" → "DnsRecordPost"
        if (preg_match('/^[a-z0-9-]+_(.+)$/', $hint, $m)) {
            $hint = $m[1];
        }

        return $this->toPascalCase($hint);
    }

    private function toPascalCase(string $str): string
    {
        // Convert kebab-case, snake_case to PascalCase
        $str = preg_replace('/[-_]/', ' ', $str);
        $str = ucwords($str);
        $str = str_replace(' ', '', $str);

        // Remove non-identifier characters
        $str = preg_replace('/[^a-zA-Z0-9]/', '', $str);

        // Ensure it starts with a letter
        if (!empty($str) && is_numeric($str[0])) {
            $str = 'T' . $str;
        }

        return $str;
    }

    private function toCamelCase(string $str): string
    {
        return lcfirst($this->toPascalCase($str));
    }
}
