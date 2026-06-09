<?php

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Generator\Parser;

use FoundryCo\Cloudflare\Generator\Ir\IrOperation;
use FoundryCo\Cloudflare\Generator\Ir\IrResource;

class ResourceGrouper
{
    private const BASE_NAMESPACE = 'FoundryCo\\Cloudflare\\Resources';

    /**
     * Group operations by tag, detect scope, build parent-child relationships.
     *
     * Scope rules (derived from common path prefix):
     *   starts with /zones/{zone_id}/...     → SCOPE_ZONE,    parent = ZonesResource
     *   starts with /accounts/{account_id}/... → SCOPE_ACCOUNT, top-level on client
     *   /zones with no sub-path             → SCOPE_TOP,     top-level on client
     *   /accounts with no sub-path          → SCOPE_TOP,     top-level on client
     *   anything else                       → SCOPE_TOP
     *
     * @param IrOperation[] $operations
     * @return IrResource[]
     */
    public function group(array $operations): array
    {
        // Group by tag
        $byTag = [];
        foreach ($operations as $op) {
            $byTag[$op->tag][] = $op;
        }

        $resources = [];

        foreach ($byTag as $tag => $ops) {
            $prefix = $this->commonPathPrefix($ops);
            $scope  = $this->detectScope($prefix);
            $name   = $this->tagToResourceName($tag);

            $resources[$tag] = new IrResource(
                tag: $tag,
                name: $name,
                namespace: self::BASE_NAMESPACE,
                scope: $scope,
                pathPrefix: $prefix,
                operations: $ops,
            );
        }

        // Build parent-child relationships for zone-scoped resources
        $this->buildHierarchy($resources);

        return $resources;
    }

    /**
     * @param IrResource[] $resources
     */
    private function buildHierarchy(array &$resources): void
    {
        // Find the ZonesResource (tag: "Zone")
        $zonesResource = null;
        foreach ($resources as $resource) {
            if ($resource->scope === IrResource::SCOPE_TOP && str_starts_with($resource->pathPrefix, '/zones')) {
                // This is the Zones resource (handles /zones and /zones/{zone_id})
                $zonesResource = $resource;
                break;
            }
        }

        foreach ($resources as $tag => $resource) {
            if ($resource->scope === IrResource::SCOPE_ZONE && $zonesResource) {
                $resources[$tag]->parent   = $zonesResource;
                $zonesResource->children[] = $resource;
            }
        }
    }

    /**
     * Find the common path prefix across all operations' paths.
     *
     * @param IrOperation[] $ops
     */
    private function commonPathPrefix(array $ops): string
    {
        $paths = array_map(fn ($op) => $op->path, $ops);

        if (count($paths) === 1) {
            return $paths[0];
        }

        $parts = array_map(fn ($p) => explode('/', ltrim($p, '/')), $paths);
        $shortest = min(array_map('count', $parts));
        $prefix = [];

        for ($i = 0; $i < $shortest; $i++) {
            $segment = $parts[0][$i];
            foreach ($parts as $p) {
                if ($p[$i] !== $segment) {
                    break 2;
                }
            }
            $prefix[] = $segment;
        }

        return '/' . implode('/', $prefix);
    }

    private function detectScope(string $prefix): string
    {
        if (preg_match('#^/zones/\{zone_id\}#', $prefix)) {
            return IrResource::SCOPE_ZONE;
        }

        if (preg_match('#^/accounts/\{account_id\}#', $prefix)) {
            return IrResource::SCOPE_ACCOUNT;
        }

        return IrResource::SCOPE_TOP;
    }

    private function tagToResourceName(string $tag): string
    {
        // "DNS Records for a Zone" → "DnsRecords"
        // "Access applications"   → "AccessApplications"
        // "Zone"                  → "Zone"

        // Remove filler phrases
        $tag = preg_replace('/\b(for a zone|for an account|zone-level|zone level|account-level|account level|for a|for an|for the|a |an |the )\b/i', '', $tag);

        // Remove scope suffixes that just indicate "Zone" or "Account" context
        $tag = preg_replace('/\s+(Zone|Account|Usage)\s*$/i', '', $tag);

        $tag = trim($tag);

        return $this->toPascalCase($tag);
    }

    private function toPascalCase(string $str): string
    {
        // Normalize separators to space
        $str = preg_replace('/[-_()+]+/', ' ', $str);

        // Split into words, preserving all-caps tokens (acronyms like DNS, IP, API)
        $words = explode(' ', $str);
        $result = '';
        foreach ($words as $word) {
            if (empty($word)) {
                continue;
            }
            // All-caps word (acronym) → keep as-is (DNS, IP, MFA, etc.)
            if (ctype_upper($word)) {
                $result .= $word;
            } else {
                $result .= ucfirst(strtolower($word));
            }
        }

        return preg_replace('/[^a-zA-Z0-9]/', '', $result);
    }
}
