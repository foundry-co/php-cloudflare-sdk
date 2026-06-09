<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SharedquerypostRequestParametersCalculationsItem
{
	public function __construct(
		/** Aggregation operator to apply. Examples: count, avg, sum, min, max, median, p90, p95, p99, uniq, stddev, variance. */
		public \FoundryCo\Cloudflare\Enums\SharedquerypostRequestParametersCalculationsItemOperator $operator,
		/** Custom label for this calculation in the results. Useful for distinguishing multiple calculations. */
		public ?string $alias = null,
		/** Field name to calculate over. Must exist in the data — verify with the keys endpoint. Omit for operators that don't require a key (e.g. count). */
		public ?string $key = null,
		/** Data type of the key. Required when key is provided to ensure correct aggregation. */
		public ?\FoundryCo\Cloudflare\Enums\SharedquerypostRequestParametersCalculationsItemKeyType $keyType = null,
	) {
	}
}
