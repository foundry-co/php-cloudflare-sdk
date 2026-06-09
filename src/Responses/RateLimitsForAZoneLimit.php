<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RateLimitsForAZoneLimit
{
	public function __construct(
		/** The action to perform when the threshold of matched traffic within the configured period is exceeded. */
		public mixed $action = null,
		/** Criteria specifying when the current rate limit should be bypassed. You can specify that the rate limit should not apply to one or more URLs. */
		public ?array $bypass = null,
		/** An informative summary of the rule. This value is sanitized and any tags will be removed. */
		public ?string $description = null,
		/** When true, indicates that the rate limit is currently disabled. */
		public ?bool $disabled = null,
		/** The unique identifier of the rate limit. */
		public ?string $id = null,
		/** Determines which traffic the rate limit counts towards the threshold. */
		public mixed $match = null,
		/** The time in seconds (an integer value) to count matching traffic. If the count exceeds the configured threshold within this period, Cloudflare will perform the configured action. */
		public ?float $period = null,
		/** The threshold that will trigger the configured mitigation action. Configure this value along with the `period` property to establish a threshold per period. */
		public ?float $threshold = null,
	) {
	}
}
