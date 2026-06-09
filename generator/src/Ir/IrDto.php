<?php

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Generator\Ir;

class IrDto
{
    /**
     * @param IrProperty[] $properties
     * @param string[] $uses  FQNs to import
     */
    public function __construct(
        public readonly string $name,
        public readonly string $namespace,
        public readonly array $properties,
        public readonly array $uses = [],
        public readonly ?string $description = null,
        public readonly bool $isRequest = false, // request DTOs get toArray()
    ) {}

    public function fqn(): string
    {
        return $this->namespace . '\\' . $this->name;
    }
}
