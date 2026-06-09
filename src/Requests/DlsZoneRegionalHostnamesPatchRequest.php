<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Regional Hostname
 */
readonly class DlsZoneRegionalHostnamesPatchRequest
{
	public function __construct(
		/** Identifying key for the region */
		public string $regionKey,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'region_key' => $this->regionKey,
		], fn ($v) => $v !== null);
	}
}
