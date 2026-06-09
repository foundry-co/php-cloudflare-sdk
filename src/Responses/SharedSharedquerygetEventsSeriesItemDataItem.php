<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SharedSharedquerygetEventsSeriesItemDataItem
{
	public function __construct(
		public SharedSharedquerygetEventsSeriesItemDataItemAggregates $aggregates,
		public float $count,
		public float $interval,
		public float $sampleInterval,
		/** Groups in the query results. */
		public ?array $groups = null,
	) {
	}
}
