<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update the current settings for the active account
 */
readonly class UpdateSettingsRequest
{
	public function __construct(
		public ?int $defaultAsn = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'default_asn' => $this->defaultAsn,
		], fn ($v) => $v !== null);
	}
}
