<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create an origin cloud region mapping
 */
readonly class OriginCloudRegionsCreateRequest
{
	public function __construct(
		/** Origin IP address (IPv4 or IPv6). Normalized to canonical form before storage (RFC 5952 for IPv6). */
		public string $ip,
		/** Cloud vendor region identifier. Must be a valid region for the specified vendor as returned by the supported_regions endpoint. */
		public string $region,
		/** Cloud vendor hosting the origin. Must be one of the supported vendors. */
		public \FoundryCo\Cloudflare\Enums\OriginCloudRegionsCreateRequestVendor $vendor,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'ip' => $this->ip,
		    'region' => $this->region,
		    'vendor' => $this->vendor->value,
		], fn ($v) => $v !== null);
	}
}
