<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DNSAnalyticsTime
{
	public function __construct(
		public array $data,
		/** Number of seconds between current time and last processed event, in another words how many seconds of data could be missing. */
		public float $dataLag,
		/** Maximum results for each metric (object mapping metric names to values). Currently always an empty object. */
		public array $max,
		/** Minimum results for each metric (object mapping metric names to values). Currently always an empty object. */
		public array $min,
		public DNSAnalyticsTimeQuery $query,
		/** Total number of rows in the result. */
		public float $rows,
		/** Total results for metrics across all data (object mapping metric names to values). */
		public array $totals,
		/**
		 * Array of time intervals in the response data. Each interval is represented as an array containing two values: the start time, and the end time.
		 */
		public array $timeIntervals,
	) {
	}
}
