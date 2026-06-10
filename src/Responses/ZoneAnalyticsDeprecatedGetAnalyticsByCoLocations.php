<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZoneAnalyticsDeprecatedGetAnalyticsByCoLocations
{
	public function __construct(
		/** The airport code identifer for the co-location. */
		public ?string $coloId = null,
		/** Time deltas containing metadata about each bucket of time. The number of buckets (resolution) is determined by the amount of time between the since and until parameters. */
		public ?array $timeseries = null,
		/** Breakdown of totals by data type. */
		public ?ZoneAnalyticsDeprecatedGetAnalyticsByCoLocationsTotals $totals = null,
	) {
	}
}
