<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SharedquerypostRequestParametersHavingsItem
{
	public function __construct(
		/** Calculation alias or operator to filter on after aggregation. */
		public ?string $key = null,
		/** Numeric comparison operator: eq, neq, gt, gte, lt, lte. */
		public ?\FoundryCo\Cloudflare\Enums\SharedquerypostRequestParametersHavingsItemOperation $operation = null,
		/** Threshold value to compare the calculation result against. */
		public ?float $value = null,
	) {
	}
}
