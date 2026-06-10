<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SpectrumAnalyticsByTimeGetAnalyticsByTime
{
	public function __construct(
		/** List of columns returned by the analytics query. */
		public ?array $data = null,
		/** Number of seconds between current time and last processed event, i.e. how many seconds of data could be missing. */
		public ?float $dataLag = null,
		public mixed $max = null,
		public mixed $min = null,
		public ?SpectrumAnalyticsByTimeGetAnalyticsByTimeQuery $query = null,
		/** Total number of rows in the result. */
		public ?float $rows = null,
		public mixed $totals = null,
		/** List of time interval buckets: [start, end] */
		public ?array $timeIntervals = null,
	) {
	}
}
