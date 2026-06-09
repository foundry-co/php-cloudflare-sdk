<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Cloud Integration
 */
readonly class ProvidersCreateRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Enums\ProvidersCreateRequestCloudType $cloudType,
		public string $friendlyName,
		public ?string $description = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'cloud_type' => $this->cloudType->value,
		    'friendly_name' => $this->friendlyName,
		    'description' => $this->description,
		], fn ($v) => $v !== null);
	}
}
