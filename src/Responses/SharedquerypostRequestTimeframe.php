<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Timeframe for the query using Unix timestamps in milliseconds. Narrower timeframes produce faster responses and more specific results.
 */
readonly class SharedquerypostRequestTimeframe
{
	public function __construct(
		/** Start timestamp for the query timeframe (Unix timestamp in milliseconds) */
		public float $from,
		/** End timestamp for the query timeframe (Unix timestamp in milliseconds) */
		public float $to,
	) {
	}
}
