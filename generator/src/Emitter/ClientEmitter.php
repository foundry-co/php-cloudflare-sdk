<?php

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Generator\Emitter;

use FoundryCo\Cloudflare\Generator\Ir\IrResource;
use Nette\PhpGenerator\PhpFile;

class ClientEmitter
{
    private const HTTP_CLIENT_CLASS = 'FoundryCo\\Cloudflare\\Http\\HttpClient';

    public function __construct(
        private readonly string $specUrl,
        private readonly \DateTimeImmutable $generatedAt,
    ) {}

    /**
     * @param IrResource[] $resources
     */
    public function emit(array $resources, string $outputDir): void
    {
        $file = new PhpFile();
        $file->setStrictTypes();

        $class = $file->addClass('FoundryCo\\Cloudflare\\CloudflareClient');

        $constructor = $class->addMethod('__construct');
        $constructor->addParameter('apiToken')->setType('string');
        $constructor->addParameter('accountId')->setType('?string')->setDefaultValue(null);
        $constructor->addParameter('baseUrl')->setType('string')->setDefaultValue('https://api.cloudflare.com/client/v4');
        $constructor->addParameter('http')->setType('?' . self::HTTP_CLIENT_CLASS)->setDefaultValue(null);
        $constructor->setBody(
            "\$this->http = \$http ?? new \\" . self::HTTP_CLIENT_CLASS . "(\$apiToken, \$baseUrl);\n"
            . "\$this->accountId = \$accountId;"
        );

        $p = $class->addProperty('http');
        $p->setPrivate()->setReadOnly()->setType(self::HTTP_CLIENT_CLASS);

        $p = $class->addProperty('accountId');
        $p->setPrivate()->setReadOnly()->setType('?string');

        // Only emit top-level and account-scoped resources as direct accessors.
        // Zone-scoped resources are accessed via zones('id')->childResource().
        foreach ($resources as $resource) {
            // Zone-scoped resources are children of ZonesResource, not on the client directly
            if ($resource->scope === IrResource::SCOPE_ZONE) {
                continue;
            }

            $accessor = $resource->accessorMethod();

            if (empty($accessor) || $class->hasMethod($accessor)) {
                continue;
            }
            $method   = $class->addMethod($accessor);

            if ($resource->scope === IrResource::SCOPE_ZONE) {
                $method->addParameter('zoneId')->setType('string');
                $method->setReturnType($resource->fqn());
                $method->setBody("return new \\{$resource->fqn()}(\$this->http, \$zoneId);");
            } elseif ($resource->scope === IrResource::SCOPE_TOP
                && str_starts_with($resource->pathPrefix, '/zones')
                && !str_starts_with($resource->pathPrefix, '/zones/{')
            ) {
                // The Zones resource takes an optional zone ID for $cf->zones('id')->get() style
                $method->addParameter('zoneId')->setType('?string')->setDefaultValue(null);
                $method->setReturnType($resource->fqn());
                $method->setBody("return new \\{$resource->fqn()}(\$this->http, \$zoneId);");
            } elseif ($resource->scope === IrResource::SCOPE_ACCOUNT) {
                $method->setReturnType($resource->fqn());
                $method->setBody("return new \\{$resource->fqn()}(\$this->http, \$this->accountId);");
            } else {
                $method->setReturnType($resource->fqn());
                $method->setBody("return new \\{$resource->fqn()}(\$this->http);");
            }
        }

        $path = rtrim($outputDir, '/') . '/CloudflareClient.php';
        $this->write($path, (string) $file);
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
