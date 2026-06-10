<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DexEndpointsTracerouteTestDetailsTracerouteStats
{
	public function __construct(
		public ?DexEndpointsTracerouteTestDetailsTracerouteStatsAvailabilityPct $availabilityPct = null,
		public ?DexEndpointsTracerouteTestDetailsTracerouteStatsHopsCount $hopsCount = null,
		public ?DexEndpointsTracerouteTestDetailsTracerouteStatsPacketLossPct $packetLossPct = null,
		public ?DexEndpointsTracerouteTestDetailsTracerouteStatsRoundTripTimeMs $roundTripTimeMs = null,
		/** Count of unique devices that have run this test in the given time period */
		public ?int $uniqueDevicesTotal = null,
	) {
	}
}
