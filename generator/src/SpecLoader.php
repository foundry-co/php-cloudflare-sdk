<?php

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Generator;

use RuntimeException;

class SpecLoader
{
    private array $spec = [];

    public function load(string $pathOrUrl): array
    {
        if (str_starts_with($pathOrUrl, 'http')) {
            $json = file_get_contents($pathOrUrl);
            if ($json === false) {
                throw new RuntimeException("Failed to fetch spec from {$pathOrUrl}");
            }
        } else {
            $json = file_get_contents($pathOrUrl);
            if ($json === false) {
                throw new RuntimeException("File not found: {$pathOrUrl}");
            }
        }

        $this->spec = json_decode($json, true, 512, JSON_THROW_ON_ERROR);

        // Resolve all $refs in-place so the rest of the generator never sees them
        $this->spec = $this->resolveRefs($this->spec, $this->spec);

        return $this->spec;
    }

    private function resolveRefs(mixed $node, array $root, int $depth = 0): mixed
    {
        // Guard against infinite recursion on circular refs
        if ($depth > 20) {
            return $node;
        }

        if (!is_array($node)) {
            return $node;
        }

        if (isset($node['$ref'])) {
            $resolved = $this->resolveRef($node['$ref'], $root);
            // Merge any sibling keys alongside the $ref (e.g. description overrides)
            $siblings = array_diff_key($node, ['$ref' => true]);
            if (!empty($siblings)) {
                $resolved = array_merge($resolved, $siblings);
            }
            return $this->resolveRefs($resolved, $root, $depth + 1);
        }

        foreach ($node as $key => $value) {
            $node[$key] = $this->resolveRefs($value, $root, $depth + 1);
        }

        return $node;
    }

    private function resolveRef(string $ref, array $root): array
    {
        if (!str_starts_with($ref, '#/')) {
            throw new RuntimeException("External \$ref not supported: {$ref}");
        }

        $parts = explode('/', ltrim($ref, '#/'));
        $node = $root;

        foreach ($parts as $part) {
            // URL-decode JSON Pointer escape sequences
            $part = str_replace(['~1', '~0'], ['/', '~'], $part);
            if (!isset($node[$part])) {
                throw new RuntimeException("Could not resolve \$ref: {$ref}");
            }
            $node = $node[$part];
        }

        return $node;
    }
}
