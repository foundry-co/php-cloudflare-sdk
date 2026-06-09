<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CatalogSyncUpdate
{
	public function __construct(
		public string $description,
		public string $destinationId,
		public \FoundryCo\Cloudflare\Enums\CatalogSyncUpdateDestinationType $destinationType,
		public string $id,
		public string $lastUserUpdateAt,
		public string $name,
		public string $policy,
		public \FoundryCo\Cloudflare\Enums\CatalogSyncUpdateUpdateMode $updateMode,
		public ?string $includesDiscoveriesUntil = null,
		public ?string $lastAttemptedUpdateAt = null,
		public ?string $lastSuccessfulUpdateAt = null,
	) {
	}
}
