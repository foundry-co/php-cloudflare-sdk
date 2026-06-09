<?php

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Generator\Ir;

class IrOperation
{
    /**
     * @param IrParameter[] $pathParams
     * @param IrParameter[] $queryParams
     */
    public function __construct(
        public readonly string $operationId,
        public readonly string $method,          // GET POST PUT PATCH DELETE
        public readonly string $path,
        public readonly string $tag,
        public readonly string $methodName,      // derived camelCase method name
        public readonly string $summary,
        public readonly array $pathParams,
        public readonly array $queryParams,
        public readonly ?string $requestClass,   // FQN of input DTO, or null
        public readonly ?string $responseClass,  // FQN of response DTO, or null
        public readonly bool $isPaginated,
    ) {}
}
