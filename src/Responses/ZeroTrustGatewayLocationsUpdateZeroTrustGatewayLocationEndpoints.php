<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configure the destination endpoints for this location.
 */
readonly class ZeroTrustGatewayLocationsUpdateZeroTrustGatewayLocationEndpoints
{
	public function __construct(
		public ?ZeroTrustGatewayLocationsUpdateZeroTrustGatewayLocationEndpointsDoh $doh = null,
		public ?ZeroTrustGatewayLocationsUpdateZeroTrustGatewayLocationEndpointsDot $dot = null,
		public ?ZeroTrustGatewayLocationsUpdateZeroTrustGatewayLocationEndpointsIpv4 $ipv4 = null,
		public ?ZeroTrustGatewayLocationsUpdateZeroTrustGatewayLocationEndpointsIpv6 $ipv6 = null,
	) {
	}
}
