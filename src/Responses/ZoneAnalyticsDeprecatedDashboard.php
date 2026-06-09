<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Totals and timeseries data.
 */
readonly class ZoneAnalyticsDeprecatedDashboard
{
	public function __construct(
		/** Time deltas containing metadata about each bucket of time. The number of buckets (resolution) is determined by the amount of time between the since and until parameters. */
		public ?array $timeseries = null,
		/** Breakdown of totals by data type. */
		public ?ZoneAnalyticsDeprecatedDashboardTotals $totals = null,
	) {
	}
}
