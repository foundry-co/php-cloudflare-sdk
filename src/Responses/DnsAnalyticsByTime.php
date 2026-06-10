<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DnsAnalyticsByTime
{
	public function __construct(
		/** Array with one row per combination of dimension values. */
		public ?array $data = null,
		/** Number of seconds between current time and last processed event, in another words how many seconds of data could be missing. */
		public ?float $dataLag = null,
		/** Maximum results for each metric (object mapping metric names to values). Currently always an empty object. */
		public ?array $max = null,
		/** Minimum results for each metric (object mapping metric names to values). Currently always an empty object. */
		public ?array $min = null,
		public ?DnsAnalyticsByTimeQuery $query = null,
		/** Total number of rows in the result. */
		public ?float $rows = null,
		/** Total results for metrics across all data (object mapping metric names to values). */
		public ?array $totals = null,
		/**
		 * Array of time intervals in the response data. Each interval is represented as an array containing two values: the start time, and the end time.
		 */
		public ?array $timeIntervals = null,
	) {
	}
}
