<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configures load shedding policies and percentages for the pool.
 */
readonly class AccountLoadBalancerPoolsPoolLoadShedding
{
	public function __construct(
		/** The percent of traffic to shed from the pool, according to the default policy. Applies to new sessions and traffic without session affinity. */
		public ?float $defaultPercent = null,
		/** The default policy to use when load shedding. A random policy randomly sheds a given percent of requests. A hash policy computes a hash over the CF-Connecting-IP address and sheds all requests originating from a percent of IPs. */
		public ?\FoundryCo\Cloudflare\Enums\AccountLoadBalancerPoolsPoolLoadSheddingDefaultPolicy $defaultPolicy = null,
		/** The percent of existing sessions to shed from the pool, according to the session policy. */
		public ?float $sessionPercent = null,
		/** Only the hash policy is supported for existing sessions (to avoid exponential decay). */
		public ?\FoundryCo\Cloudflare\Enums\AccountLoadBalancerPoolsPoolLoadSheddingSessionPolicy $sessionPolicy = null,
	) {
	}
}
