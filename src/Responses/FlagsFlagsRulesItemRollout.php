<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class FlagsFlagsRulesItemRollout
{
	public function __construct(
		/** Percentage of matching traffic (0–100) served this variation. For multi-way splits, use cumulative upper bounds across rules (e.g. 30, 70, 100). */
		public float $percentage,
		/** Context attribute used for sticky bucketing. Defaults to `targetingKey`. If absent at evaluation time, bucketing is random per request. */
		public ?string $attribute = null,
	) {
	}
}
