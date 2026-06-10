<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DexEndpointsHttpTestDetailsHttpStats
{
	public function __construct(
		public ?DexEndpointsHttpTestDetailsHttpStatsAvailabilityPct $availabilityPct = null,
		public ?DexEndpointsHttpTestDetailsHttpStatsDnsResponseTimeMs $dnsResponseTimeMs = null,
		public ?array $httpStatusCode = null,
		public ?DexEndpointsHttpTestDetailsHttpStatsResourceFetchTimeMs $resourceFetchTimeMs = null,
		public ?DexEndpointsHttpTestDetailsHttpStatsServerResponseTimeMs $serverResponseTimeMs = null,
		/** Count of unique devices that have run this test in the given time period */
		public ?int $uniqueDevicesTotal = null,
	) {
	}
}
