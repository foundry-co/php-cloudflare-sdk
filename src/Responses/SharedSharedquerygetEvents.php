<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Individual event results. Present when the query view is 'events'. Contains the matching log lines and their metadata.
 */
readonly class SharedSharedquerygetEvents
{
	public function __construct(
		/** Total number of events matching the query (may exceed the number returned due to limits). */
		public ?float $count = null,
		/** List of individual telemetry events matching the query. */
		public ?array $events = null,
		/** List of fields discovered in the matched events. Useful for building dynamic UIs. */
		public ?array $fields = null,
		/** Time-series data for the matched events, bucketed by the query granularity. */
		public ?array $series = null,
	) {
	}
}
