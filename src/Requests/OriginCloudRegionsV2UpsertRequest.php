<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create or replace an origin cloud region mapping
 */
readonly class OriginCloudRegionsV2UpsertRequest
{
	public function __construct(
		/** Origin IP address (IPv4 or IPv6). For the single PUT endpoint (`PUT /origin/cloud_regions/{origin_ip}`), this field must match the path parameter or the request will be rejected with a 400 error. For the batch PUT endpoint, this field identifies which mapping to upsert. */
		public string $originIp,
		/** Cloud vendor region identifier. Must be a valid region for the specified vendor as returned by the supported_regions endpoint. */
		public string $region,
		/** Cloud vendor hosting the origin. Must be one of the supported vendors. */
		public \FoundryCo\Cloudflare\Enums\OriginCloudRegionsV2UpsertRequestVendor $vendor,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'origin_ip' => $this->originIp,
		    'region' => $this->region,
		    'vendor' => $this->vendor->value,
		], fn ($v) => $v !== null);
	}
}
