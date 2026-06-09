<?php

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Generator\Ir;

class IrEnum
{
    /**
     * @param string[] $cases
     */
    public function __construct(
        public readonly string $name,
        public readonly string $namespace,
        public readonly string $backingType, // 'string' | 'int'
        public readonly array $cases,
    ) {}

    public function fqn(): string
    {
        return $this->namespace . '\\' . $this->name;
    }
}
