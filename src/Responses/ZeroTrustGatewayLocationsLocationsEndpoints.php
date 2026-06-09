<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configure the destination endpoints for this location.
 */
readonly class ZeroTrustGatewayLocationsLocationsEndpoints
{
	public function __construct(
		public ZeroTrustGatewayLocationsLocationsEndpointsDoh $doh,
		public ZeroTrustGatewayLocationsLocationsEndpointsDot $dot,
		public ZeroTrustGatewayLocationsLocationsEndpointsIpv4 $ipv4,
		public ZeroTrustGatewayLocationsLocationsEndpointsIpv6 $ipv6,
	) {
	}
}
