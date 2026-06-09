<?php

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Generator\Ir;

class IrParameter
{
    public function __construct(
        public readonly string $name,
        public readonly string $phpType,
        public readonly bool $required,
        public readonly bool $isPath,   // true = path param, false = query param
        public readonly ?string $description = null,
        public readonly mixed $default = null,
    ) {}
}
