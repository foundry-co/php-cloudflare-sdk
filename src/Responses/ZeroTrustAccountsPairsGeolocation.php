<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specify the geographic location of this CIDR pair.
 */
readonly class ZeroTrustAccountsPairsGeolocation
{
	public function __construct(
		/** Specify the city of this egress IP. */
		public ?string $city = null,
		/** Specify the country of this egress IP. */
		public ?string $country = null,
	) {
	}
}
