<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DexEndpointsTracerouteTestDetailsTracerouteStatsPacketLossPct
{
	public function __construct(
		public ?array $slots = null,
		/** average observed in the time period */
		public ?float $avg = null,
		/** highest observed in the time period */
		public ?float $max = null,
		/** lowest  observed in the time period */
		public ?float $min = null,
	) {
	}
}
