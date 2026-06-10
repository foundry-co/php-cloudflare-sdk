<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DexEndpointsTracerouteTestPercentilesHopsCount
{
	public function __construct(
		/** p50 observed in the time period */
		public ?float $p50 = null,
		/** p90 observed in the time period */
		public ?float $p90 = null,
		/** p95 observed in the time period */
		public ?float $p95 = null,
		/** p99 observed in the time period */
		public ?float $p99 = null,
	) {
	}
}
