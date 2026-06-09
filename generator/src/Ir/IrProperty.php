<?php

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Generator\Ir;

class IrProperty
{
    public function __construct(
        public readonly string $name,        // camelCase PHP name
        public readonly string $serializedName, // original JSON key
        public readonly string $phpType,     // e.g. 'string', 'int', 'ZoneStatus', 'Zone[]'
        public readonly bool $nullable,
        public readonly bool $readOnly,
        public readonly ?string $description,
        public readonly mixed $default = null,
        public readonly bool $hasDefault = false,
    ) {}
}
