<?php

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Generator\Emitter;

use FoundryCo\Cloudflare\Generator\Ir\IrEnum;
use Nette\PhpGenerator\PhpFile;

class EnumEmitter
{
    public function __construct(
        private readonly string $specUrl,
        private readonly \DateTimeImmutable $generatedAt,
    ) {}

    public function emit(IrEnum $enum, string $outputDir): void
    {
        $file = new PhpFile();
        $file->setStrictTypes();

        $enumObj = $file->addEnum($enum->namespace . '\\' . $enum->name);
        $enumObj->setType($enum->backingType);

        $seen = [];
        foreach ($enum->cases as $value) {
            $caseName = $this->valueToCaseName($value, $enum->backingType);
            if (empty($caseName) || isset($seen[$caseName])) {
                continue;
            }
            $seen[$caseName] = true;
            $enumObj->addCase($caseName, $enum->backingType === 'int' ? (int) $value : $value);
        }

        $path = $this->resolveOutputPath($outputDir, $enum->namespace, $enum->name);
        $this->write($path, (string) $file);
    }

    private function valueToCaseName(string $value, string $type): string
    {
        if ($type === 'int') {
            return 'V' . $value;
        }

        // Convert the value to a valid PHP identifier in PascalCase
        $name = preg_replace('/[^a-zA-Z0-9_]/', '_', $value);
        $name = preg_replace('/_+/', '_', $name);
        $parts = explode('_', trim($name, '_'));
        $parts = array_map('ucfirst', $parts);
        $name  = implode('', $parts);

        if (empty($name)) {
            return '';
        }

        // Enum cases must not start with a digit
        if (is_numeric($name[0])) {
            $name = 'V' . $name;
        }

        return $name;
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
