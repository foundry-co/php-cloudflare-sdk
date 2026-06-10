<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DexEndpointsListTestsOverviewOverviewMetrics
{
	public function __construct(
		/** number of  tests. */
		public ?int $testsTotal = null,
		/** percentage availability for all HTTP test results in response */
		public ?float $avgHttpAvailabilityPct = null,
		/** percentage availability for all traceroutes results in response */
		public ?float $avgTracerouteAvailabilityPct = null,
	) {
	}
}
