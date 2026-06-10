<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CatalogSyncsUpdate
{
	public function __construct(
		public ?string $description = null,
		public ?string $destinationId = null,
		public ?\FoundryCo\Cloudflare\Enums\CatalogSyncsUpdateDestinationType $destinationType = null,
		public ?string $id = null,
		public ?string $lastUserUpdateAt = null,
		public ?string $name = null,
		public ?string $policy = null,
		public ?\FoundryCo\Cloudflare\Enums\CatalogSyncsUpdateUpdateMode $updateMode = null,
		public ?string $includesDiscoveriesUntil = null,
		public ?string $lastAttemptedUpdateAt = null,
		public ?string $lastSuccessfulUpdateAt = null,
	) {
	}
}
