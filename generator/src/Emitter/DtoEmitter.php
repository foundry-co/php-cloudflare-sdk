<?php

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Generator\Emitter;

use FoundryCo\Cloudflare\Generator\Ir\IrDto;
use FoundryCo\Cloudflare\Generator\Ir\IrProperty;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\Printer;

class DtoEmitter
{
    public function __construct(
        private readonly string $specUrl,
        private readonly \DateTimeImmutable $generatedAt,
    ) {}

    public function emit(IrDto $dto, string $outputDir): void
    {
        $file = new PhpFile();
        $file->setStrictTypes();

        $class = $file->addClass($dto->namespace . '\\' . $dto->name);
        $class->setReadOnly();

        if ($dto->description) {
            $class->addComment($dto->description);
        }

        // Add use statements
        foreach ($dto->uses as $fqn) {
            // nette handles this via the namespace
        }

        // Constructor with promoted properties
        $constructor = $class->addMethod('__construct');

        foreach ($dto->properties as $prop) {
            $param = $constructor->addPromotedParameter($prop->name);
            $param->setPublic();

            $type = $this->normalizeType($prop->phpType);

            if ($prop->nullable) {
                $param->setType('?' . $type);
                $param->setDefaultValue(null);
            } else {
                $param->setType($type);
            }

            if ($prop->description) {
                $param->addComment($prop->description);
            }
        }

        // Request DTOs need a toArray() method for serialization
        if ($dto->isRequest) {
            $this->addToArrayMethod($class, $dto->properties);
        }

        $path = $this->resolveOutputPath($outputDir, $dto->namespace, $dto->name);
        $this->write($path, (string) $file);
    }

    private function addToArrayMethod(\Nette\PhpGenerator\ClassType $class, array $properties): void
    {
        $method = $class->addMethod('toArray');
        $method->setReturnType('array');

        $lines = ['return array_filter(['];
        foreach ($properties as $prop) {
            $value = $this->serializeProperty($prop);
            $lines[] = "    '{$prop->serializedName}' => {$value},";
        }
        $lines[] = '], fn ($v) => $v !== null);';

        $method->setBody(implode("\n", $lines));
    }

    private function serializeProperty(IrProperty $prop): string
    {
        $access = "\$this->{$prop->name}";

        // Enum → value
        $type = ltrim($prop->phpType, '?');
        if (str_contains($type, 'Enum') || str_contains($type, 'Enums\\')) {
            $null = $prop->nullable ? "?->" : "->";
            return "{$access}{$null}value";
        }

        // DateTimeImmutable → ISO string
        if (str_contains($type, 'DateTimeImmutable')) {
            $null = $prop->nullable ? "?->" : "->";
            return "{$access}{$null}format(\DateTimeImmutable::ATOM)";
        }

        // Object → toArray()
        if (!in_array($type, ['string', 'int', 'float', 'bool', 'array', 'mixed']) && !str_ends_with($type, '[]')) {
            $null = $prop->nullable ? "?->" : "->";
            return "{$access}{$null}toArray()";
        }

        return $access;
    }

    private function normalizeType(string $type): string
    {
        // Strip leading backslash — nette handles FQNs properly
        $type = ltrim($type, '\\');

        // Typed arrays (Foo[]) → array (Valinor handles generics via docblocks)
        if (str_ends_with($type, '[]')) {
            return 'array';
        }

        return $type;
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
