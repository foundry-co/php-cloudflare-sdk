<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configures origin steering for the pool. Controls how origins are selected for new sessions and traffic without session affinity.
 */
readonly class AccountLoadBalancerPoolsPatchPoolRequestOriginSteering
{
	public function __construct(
		/**
		 * The type of origin steering policy to use.
		 * - `"random"`: Select an origin randomly.
		 * - `"hash"`: Select an origin by computing a hash over the CF-Connecting-IP address.
		 * - `"least_outstanding_requests"`: Select an origin by taking into consideration origin weights, as well as each origin's number of outstanding requests. Origins with more pending requests are weighted proportionately less relative to others.
		 * - `"least_connections"`: Select an origin by taking into consideration origin weights, as well as each origin's number of open connections. Origins with more open connections are weighted proportionately less relative to others. Supported for HTTP/1 and HTTP/2 connections.
		 */
		public ?\FoundryCo\Cloudflare\Enums\AccountLoadBalancerPoolsPatchPoolRequestOriginSteeringPolicy $policy = null,
	) {
	}
}
