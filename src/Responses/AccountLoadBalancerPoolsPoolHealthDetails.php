<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A list of regions from which to run health checks. Null means every Cloudflare data center.
 */
readonly class AccountLoadBalancerPoolsPoolHealthDetails
{
	public function __construct(
		/** Pool ID. */
		public ?string $poolId = null,
		/** List of regions and associated health status. */
		public ?AccountLoadBalancerPoolsPoolHealthDetailsPopHealth $popHealth = null,
	) {
	}
}
