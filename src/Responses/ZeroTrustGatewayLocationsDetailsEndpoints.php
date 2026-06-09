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
readonly class ZeroTrustGatewayLocationsDetailsEndpoints
{
	public function __construct(
		public ZeroTrustGatewayLocationsDetailsEndpointsDoh $doh,
		public ZeroTrustGatewayLocationsDetailsEndpointsDot $dot,
		public ZeroTrustGatewayLocationsDetailsEndpointsIpv4 $ipv4,
		public ZeroTrustGatewayLocationsDetailsEndpointsIpv6 $ipv6,
	) {
	}
}
