<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SpectrumAnalyticsSummary
{
	public function __construct(
		/** List of columns returned by the analytics query. */
		public array $data,
		/** Number of seconds between current time and last processed event, i.e. how many seconds of data could be missing. */
		public float $dataLag,
		public mixed $max,
		public mixed $min,
		public SpectrumAnalyticsSummaryQuery $query,
		/** Total number of rows in the result. */
		public float $rows,
		public mixed $totals,
		/** List of time interval buckets: [start, end] */
		public ?array $timeIntervals = null,
	) {
	}
}
