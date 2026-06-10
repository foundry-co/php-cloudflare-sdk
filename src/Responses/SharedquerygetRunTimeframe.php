<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Time range for the query execution
 */
readonly class SharedquerygetRunTimeframe
{
	public function __construct(
		/** Start timestamp for the query timeframe (Unix timestamp in milliseconds) */
		public ?float $from = null,
		/** End timestamp for the query timeframe (Unix timestamp in milliseconds) */
		public ?float $to = null,
	) {
	}
}
