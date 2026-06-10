<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configures pool weights.
 * - `steering_policy="random"`: A random pool is selected with probability proportional to pool weights.
 * - `steering_policy="least_outstanding_requests"`: Use pool weights to scale each pool's outstanding requests.
 * - `steering_policy="least_connections"`: Use pool weights to scale each pool's open connections.
 */
readonly class LoadBalancersLoadBalancerDetailsRandomSteering
{
	public function __construct(
		/** The default weight for pools in the load balancer that are not specified in the pool_weights map. */
		public ?float $defaultWeight = null,
		/** A mapping of pool IDs to custom weights. The weight is relative to other pools in the load balancer. */
		public ?array $poolWeights = null,
	) {
	}
}
