<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Breakdown of totals for pageviews.
 */
readonly class ZoneAnalyticsDeprecatedDashboardTimeseriesItemPageviews
{
	public function __construct(
		/** The total number of pageviews served within the time range. */
		public ?int $all = null,
		/** A variable list of key/value pairs representing the search engine and number of hits. */
		public ?array $searchEngine = null,
	) {
	}
}
