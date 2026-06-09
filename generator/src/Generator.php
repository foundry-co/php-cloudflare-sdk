<?php

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Generator;

use FoundryCo\Cloudflare\Generator\Emitter\ClientEmitter;
use FoundryCo\Cloudflare\Generator\Emitter\DtoEmitter;
use FoundryCo\Cloudflare\Generator\Emitter\EnumEmitter;
use FoundryCo\Cloudflare\Generator\Emitter\ResourceEmitter;
use FoundryCo\Cloudflare\Generator\Parser\OperationParser;
use FoundryCo\Cloudflare\Generator\Parser\ResourceGrouper;
use FoundryCo\Cloudflare\Generator\Parser\SchemaParser;
use Symfony\Component\Console\Output\OutputInterface;

class Generator
{
    private const SPEC_URL = 'https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json';

    public function run(string $outputDir, ?string $specPath, OutputInterface $output): void
    {
        $output->writeln('<info>Loading spec...</info>');

        $loader = new SpecLoader();
        $spec   = $loader->load($specPath ?? self::SPEC_URL);

        $output->writeln('<info>Parsing schemas and operations...</info>');

        $schemaParser    = new SchemaParser();
        $operationParser = new OperationParser($schemaParser);
        $operations      = $operationParser->parseAll($spec);

        $output->writeln(sprintf('  Found %d operations', count($operations)));

        $output->writeln('<info>Grouping into resources...</info>');

        $grouper   = new ResourceGrouper();
        $resources = $grouper->group($operations);

        $output->writeln(sprintf('  Found %d resources', count($resources)));

        $specUrl     = $specPath ?? self::SPEC_URL;
        $generatedAt = new \DateTimeImmutable('now', new \DateTimeZone('UTC'));

        // Clear existing generated directories
        foreach (['Resources', 'Enums', 'Responses'] as $dir) {
            $path = rtrim($outputDir, '/') . '/' . $dir;
            if (is_dir($path)) {
                $this->clearDirectory($path);
            }
        }
        $clientFile = rtrim($outputDir, '/') . '/CloudflareClient.php';
        if (file_exists($clientFile)) {
            unlink($clientFile);
        }

        $output->writeln('<info>Emitting enums...</info>');
        $enumEmitter = new EnumEmitter($specUrl, $generatedAt);
        $enums = $schemaParser->getEnums();
        foreach ($enums as $enum) {
            $enumEmitter->emit($enum, $outputDir);
        }
        $output->writeln(sprintf('  Emitted %d enums', count($enums)));

        $output->writeln('<info>Emitting DTOs...</info>');
        $dtoEmitter = new DtoEmitter($specUrl, $generatedAt);
        $dtos = $schemaParser->getDtos();
        foreach ($dtos as $dto) {
            $dtoEmitter->emit($dto, $outputDir);
        }
        $output->writeln(sprintf('  Emitted %d DTOs', count($dtos)));

        $output->writeln('<info>Emitting resources...</info>');
        $resourceEmitter = new ResourceEmitter($specUrl, $generatedAt);
        foreach ($resources as $resource) {
            $resourceEmitter->emit($resource, $outputDir);
        }
        $output->writeln(sprintf('  Emitted %d resources', count($resources)));

        $output->writeln('<info>Emitting client...</info>');
        $clientEmitter = new ClientEmitter($specUrl, $generatedAt);
        $clientEmitter->emit($resources, $outputDir);

        $output->writeln('<info>Done.</info>');
    }

    private function clearDirectory(string $dir): void
    {
        $files = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator($dir, \RecursiveDirectoryIterator::SKIP_DOTS),
            \RecursiveIteratorIterator::CHILD_FIRST
        );

        foreach ($files as $file) {
            if ($file->isDir()) {
                rmdir($file->getRealPath());
            } else {
                unlink($file->getRealPath());
            }
        }
    }
}
