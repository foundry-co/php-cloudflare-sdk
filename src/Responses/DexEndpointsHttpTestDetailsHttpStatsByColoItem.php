<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DexEndpointsHttpTestDetailsHttpStatsByColoItem
{
	public function __construct(
		public ?DexEndpointsHttpTestDetailsHttpStatsByColoItemAvailabilityPct $availabilityPct = null,
		public ?string $colo = null,
		public ?DexEndpointsHttpTestDetailsHttpStatsByColoItemDnsResponseTimeMs $dnsResponseTimeMs = null,
		public ?array $httpStatusCode = null,
		public ?DexEndpointsHttpTestDetailsHttpStatsByColoItemResourceFetchTimeMs $resourceFetchTimeMs = null,
		public ?DexEndpointsHttpTestDetailsHttpStatsByColoItemServerResponseTimeMs $serverResponseTimeMs = null,
		/** Count of unique devices that have run this test in the given time period */
		public ?int $uniqueDevicesTotal = null,
	) {
	}
}
