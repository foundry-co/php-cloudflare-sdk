<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SharedquerygetEventsSeriesItemDataItem
{
	public function __construct(
		public ?SharedquerygetEventsSeriesItemDataItemAggregates $aggregates = null,
		public ?float $count = null,
		public ?float $interval = null,
		public ?float $sampleInterval = null,
		/** Groups in the query results. */
		public ?array $groups = null,
	) {
	}
}
