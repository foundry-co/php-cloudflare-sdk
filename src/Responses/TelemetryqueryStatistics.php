<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Query performance statistics from the database. Includes execution time, rows scanned, and bytes read. Does not include network latency.
 */
readonly class TelemetryqueryStatistics
{
	public function __construct(
		/** Number of uncompressed bytes read from the table. */
		public ?float $bytesRead = null,
		/** Time in seconds for the query to run. */
		public ?float $elapsed = null,
		/** Number of rows scanned from the table. */
		public ?float $rowsRead = null,
		/** The level of Adaptive Bit Rate (ABR) sampling used for the query. If empty the ABR level is 1 */
		public ?float $abrLevel = null,
	) {
	}
}
