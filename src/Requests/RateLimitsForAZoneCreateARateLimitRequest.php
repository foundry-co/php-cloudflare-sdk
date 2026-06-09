<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a rate limit
 */
readonly class RateLimitsForAZoneCreateARateLimitRequest
{
	public function __construct(
		/** The action to perform when the threshold of matched traffic within the configured period is exceeded. */
		public mixed $action,
		/** Determines which traffic the rate limit counts towards the threshold. */
		public mixed $match,
		/** The time in seconds (an integer value) to count matching traffic. If the count exceeds the configured threshold within this period, Cloudflare will perform the configured action. */
		public float $period,
		/** The threshold that will trigger the configured mitigation action. Configure this value along with the `period` property to establish a threshold per period. */
		public float $threshold,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'action' => $this->action,
		    'match' => $this->match,
		    'period' => $this->period,
		    'threshold' => $this->threshold,
		], fn ($v) => $v !== null);
	}
}
