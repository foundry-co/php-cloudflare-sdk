<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DexEndpointsTracerouteTestDetailsTracerouteStatsByColoItem
{
	public function __construct(
		public ?DexEndpointsTracerouteTestDetailsTracerouteStatsByColoItemAvailabilityPct $availabilityPct = null,
		public ?string $colo = null,
		public ?DexEndpointsTracerouteTestDetailsTracerouteStatsByColoItemHopsCount $hopsCount = null,
		public ?DexEndpointsTracerouteTestDetailsTracerouteStatsByColoItemPacketLossPct $packetLossPct = null,
		public ?DexEndpointsTracerouteTestDetailsTracerouteStatsByColoItemRoundTripTimeMs $roundTripTimeMs = null,
		/** Count of unique devices that have run this test in the given time period */
		public ?int $uniqueDevicesTotal = null,
	) {
	}
}
