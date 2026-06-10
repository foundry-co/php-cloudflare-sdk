<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Controls location-based steering for non-proxied requests. See `steering_policy` to learn how steering is affected.
 */
readonly class LoadBalancersUpdateLoadBalancerLocationStrategy
{
	public function __construct(
		/**
		 * Determines the authoritative location when ECS is not preferred, does not exist in the request, or its GeoIP lookup is unsuccessful.
		 * - `"pop"`: Use the Cloudflare PoP location.
		 * - `"resolver_ip"`: Use the DNS resolver GeoIP location. If the GeoIP lookup is unsuccessful, use the Cloudflare PoP location.
		 */
		public ?\FoundryCo\Cloudflare\Enums\LoadBalancersUpdateLoadBalancerLocationStrategyMode $mode = null,
		/**
		 * Whether the EDNS Client Subnet (ECS) GeoIP should be preferred as the authoritative location.
		 * - `"always"`: Always prefer ECS.
		 * - `"never"`: Never prefer ECS.
		 * - `"proximity"`: Prefer ECS only when `steering_policy="proximity"`.
		 * - `"geo"`: Prefer ECS only when `steering_policy="geo"`.
		 */
		public ?\FoundryCo\Cloudflare\Enums\LoadBalancersUpdateLoadBalancerLocationStrategyPreferEcs $preferEcs = null,
	) {
	}
}
