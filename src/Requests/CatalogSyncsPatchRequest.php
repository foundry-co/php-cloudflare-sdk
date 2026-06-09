<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Patch Catalog Sync
 */
readonly class CatalogSyncsPatchRequest
{
	public function __construct(
		public ?string $description = null,
		public ?string $name = null,
		public ?string $policy = null,
		public ?\FoundryCo\Cloudflare\Enums\CatalogSyncsPatchRequestUpdateMode $updateMode = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		    'name' => $this->name,
		    'policy' => $this->policy,
		    'update_mode' => $this->updateMode?->value,
		], fn ($v) => $v !== null);
	}
}
