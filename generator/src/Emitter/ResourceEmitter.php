<?php

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Generator\Emitter;

use FoundryCo\Cloudflare\Generator\Ir\IrOperation;
use FoundryCo\Cloudflare\Generator\Ir\IrResource;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;

class ResourceEmitter
{
    private const HTTP_CLIENT_CLASS = 'FoundryCo\\Cloudflare\\Http\\HttpClient';
    private const PAGINATED_CLASS   = 'FoundryCo\\Cloudflare\\Support\\PaginatedResponse';

    public function __construct(
        private readonly string $specUrl,
        private readonly \DateTimeImmutable $generatedAt,
    ) {}

    public function emit(IrResource $resource, string $outputDir): void
    {
        $file = new PhpFile();
        $file->setStrictTypes();

        $class = $file->addClass($resource->fqn());

        $this->addConstructor($class, $resource);
        $this->addChildAccessors($class, $resource);
        $this->addOperationMethods($class, $resource);

        $path = $this->resolveOutputPath($outputDir, $resource->namespace, $resource->className());
        $this->write($path, (string) $file);
    }

    private function addConstructor(ClassType $class, IrResource $resource): void
    {
        $constructor = $class->addMethod('__construct');

        $clientParam = $constructor->addPromotedParameter('client');
        $clientParam->setPrivate()->setReadOnly()->setType(self::HTTP_CLIENT_CLASS);

        // Zone root resource (tag: Zone, path: /zones) also accepts optional zoneId
        // so consumers can do $cf->zones('id')->get() as well as $cf->zones()->list()
        $isZoneRoot = $resource->scope === IrResource::SCOPE_TOP
            && str_starts_with($resource->pathPrefix, '/zones')
            && !str_starts_with($resource->pathPrefix, '/zones/{');

        if ($resource->scope === IrResource::SCOPE_ZONE || $isZoneRoot) {
            $zoneParam = $constructor->addPromotedParameter('zoneId');
            $zoneParam->setPrivate()->setReadOnly()->setType('?string')->setDefaultValue(null);
        }

        if ($resource->scope === IrResource::SCOPE_ACCOUNT) {
            $accountParam = $constructor->addPromotedParameter('accountId');
            $accountParam->setPrivate()->setReadOnly()->setType('?string')->setDefaultValue(null);
        }
    }

    private function addChildAccessors(ClassType $class, IrResource $resource): void
    {
        foreach ($resource->children as $child) {
            $method = $class->addMethod($child->accessorMethod());
            $method->setReturnType($child->fqn());

            if ($child->scope === IrResource::SCOPE_ZONE) {
                $method->setBody("return new \\{$child->fqn()}(\$this->client, \$this->zoneId);");
            } elseif ($child->scope === IrResource::SCOPE_ACCOUNT) {
                $method->setBody("return new \\{$child->fqn()}(\$this->client, \$this->accountId);");
            } else {
                $method->setBody("return new \\{$child->fqn()}(\$this->client);");
            }
        }
    }

    private function addOperationMethods(ClassType $class, IrResource $resource): void
    {
        $usedNames = [];
        foreach ($resource->operations as $op) {
            $name = $op->methodName;
            if (isset($usedNames[$name])) {
                // Disambiguate using the distinguishing path suffix
                // e.g. POST /dns_records vs POST /dns_records/batch → list vs batch
                $name = $this->disambiguate($op, $resource->pathPrefix);
                if (isset($usedNames[$name])) {
                    // Last resort: full operationId camelCased
                    $name = lcfirst(str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $op->operationId))));
                    $name = preg_replace('/[^a-zA-Z0-9]/', '', $name);
                    $name = lcfirst($name);
                }
            }
            $usedNames[$name] = true;
            $this->addOperationMethod($class, $op, $resource, $name);
        }
    }

    private function addOperationMethod(ClassType $class, IrOperation $op, IrResource $resource, string $methodName): void
    {
        $method = $class->addMethod($methodName);

        if ($op->summary) {
            $method->addComment($op->summary);
        }

        // Add non-scope path parameters as method arguments
        foreach ($op->pathParams as $param) {
            $p = $method->addParameter($param->name);
            $p->setType($param->phpType);
        }

        // Add request DTO parameter for mutations
        if ($op->requestClass) {
            $p = $method->addParameter('request');
            $p->setType('\\' . ltrim($op->requestClass, '\\'));
        }

        // Add optional query parameters as individual nullable method args
        foreach ($op->queryParams as $param) {
            $p = $method->addParameter($param->name);
            $baseType = ltrim($param->phpType, '?\\');
            // Arrays and compound types can't be nullable with ? prefix — use null union
            if (str_ends_with($baseType, '[]') || str_contains($baseType, '|')) {
                $p->setType('array');
            } else {
                $p->setType('?' . $baseType);
            }
            $p->setDefaultValue(null);
        }

        // Return type
        $returnType = $this->resolveReturnType($op);
        $method->setReturnType($returnType);

        // Body
        $body = $this->buildMethodBody($op, $resource);
        $method->setBody($body);
    }

    private function resolveReturnType(IrOperation $op): string
    {
        if ($op->method === 'DELETE') {
            return 'void';
        }

        // Return mixed — at runtime GET endpoints may return either the typed class
        // or a PaginatedResponse depending on whether result_info is present in the response.
        return 'mixed';
    }

    private function buildMethodBody(IrOperation $op, IrResource $resource): string
    {
        $path = $this->buildPathExpression($op->path, $op->pathParams);

        if ($op->method === 'DELETE') {
            return "\$this->client->delete({$path});";
        }

        $responseClass = $op->responseClass
            ? '\\' . ltrim($op->responseClass, '\\') . '::class'
            : 'null';

        $queryExpr = $this->buildQueryExpression($op);
        $requestExpr = $op->requestClass ? '$request' : 'null';

        return match ($op->method) {
            'GET'    => "return \$this->client->get({$path}, {$responseClass}, {$queryExpr});",
            'POST'   => "return \$this->client->post({$path}, {$responseClass}, {$requestExpr});",
            'PUT'    => "return \$this->client->put({$path}, {$responseClass}, {$requestExpr});",
            'PATCH'  => "return \$this->client->patch({$path}, {$responseClass}, {$requestExpr});",
            default  => "return \$this->client->get({$path}, {$responseClass}, {$queryExpr});",
        };
    }

    /**
     * @param IrParameter[] $pathParams
     */
    private function buildPathExpression(string $path, array $pathParams): string
    {
        // Build a map from snake_case param name to camelCase PHP variable
        $paramMap = [];
        foreach ($pathParams as $param) {
            // Convert camelCase back to snake_case to match {param_name} in path
            $snakeCase = strtolower(preg_replace('/[A-Z]/', '_$0', lcfirst($param->name)));
            $paramMap[$snakeCase] = $param->name;
        }

        // Replace scope params with resource properties
        $path = str_replace('{zone_id}', "' . \$this->zoneId . '", $path);
        $path = str_replace('{account_id}', "' . \$this->accountId . '", $path);

        // Replace remaining path params using camelCase variable names
        $path = preg_replace_callback('/\{([^}]+)\}/', function ($m) use ($paramMap) {
            $snakeName = $m[1];
            $camelName = $paramMap[$snakeName] ?? lcfirst(str_replace('_', '', ucwords($snakeName, '_')));
            return "' . \${$camelName} . '";
        }, $path);

        // Wrap and clean up concatenation artifacts
        $path = "'" . $path . "'";
        $path = str_replace("'' . ", '', $path);
        $path = str_replace(" . ''", '', $path);

        return $path;
    }

    private function buildQueryExpression(IrOperation $op): string
    {
        if (empty($op->queryParams)) {
            return '[]';
        }

        $pairs = [];
        foreach ($op->queryParams as $param) {
            $pairs[] = "'{$param->name}' => \${$param->name} ?? null";
        }

        return '[' . implode(', ', $pairs) . ']';
    }

    /**
     * Derive a disambiguated method name from the path suffix beyond the resource prefix.
     * POST /zones/{z}/dns_records/batch  → "batch" → createBatch()
     * GET  /zones/{z}/dns_records/export → "export" → exportList() or just "export"
     */
    private function disambiguate(IrOperation $op, string $resourcePrefix): string
    {
        // Strip the resource prefix and any scope params from the path
        $path   = $op->path;
        $prefix = preg_replace('#/\{[^}]+\}#', '', $resourcePrefix);
        $suffix = preg_replace('#^' . preg_quote($prefix, '#') . '#', '', $path);
        $suffix = preg_replace('#/\{[^}]+\}#', '', $suffix); // remove path params
        $suffix = trim($suffix, '/');

        if (!empty($suffix)) {
            // "dns_records/batch" → last segment → "batch"
            $parts = explode('/', $suffix);
            $last  = end($parts);
            $verb  = strtolower(preg_replace('/[^a-zA-Z0-9]/', '_', $last));
            $verb  = str_replace('_', ' ', $verb);
            $verb  = lcfirst(str_replace(' ', '', ucwords($verb)));
            return $verb;
        }

        // Fallback: method verb
        return $op->methodName . ucfirst(strtolower($op->method));
    }

    private function shortName(string $fqn): string
    {
        $parts = explode('\\', ltrim($fqn, '\\'));
        return end($parts);
    }

    private function resolveOutputPath(string $outputDir, string $namespace, string $name): string
    {
        $relative = str_replace('FoundryCo\\Cloudflare\\', '', $namespace);
        $relative = str_replace('\\', DIRECTORY_SEPARATOR, $relative);
        $dir      = rtrim($outputDir, '/') . '/' . $relative;

        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        return $dir . '/' . $name . '.php';
    }

    private function write(string $path, string $content): void
    {
        $header = $this->generatedHeader();
        file_put_contents($path, "<?php\n\n" . $header . ltrim($content, "<?php\n"));
    }

    private function generatedHeader(): string
    {
        $date = $this->generatedAt->format('Y-m-d H:i:s \U\T\C');
        return "/**\n * This file is auto-generated. Do not edit manually.\n"
            . " * Generated: {$date}\n"
            . " * Spec: {$this->specUrl}\n"
            . " */\n\n";
    }
}
