<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Catalog Sync
 */
readonly class CatalogSyncsCreateRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Enums\CatalogSyncsCreateRequestDestinationType $destinationType,
		public string $name,
		public \FoundryCo\Cloudflare\Enums\CatalogSyncsCreateRequestUpdateMode $updateMode,
		public ?string $description = null,
		public ?string $policy = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'destination_type' => $this->destinationType->value,
		    'name' => $this->name,
		    'update_mode' => $this->updateMode->value,
		    'description' => $this->description,
		    'policy' => $this->policy,
		], fn ($v) => $v !== null);
	}
}
