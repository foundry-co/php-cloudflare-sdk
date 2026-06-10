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
readonly class ZeroTrustGatewayLocationsUpdateZeroTrustGatewayLocationRequestEndpoints
{
	public function __construct(
		public ?ZeroTrustGatewayLocationsUpdateZeroTrustGatewayLocationRequestEndpointsDoh $doh = null,
		public ?ZeroTrustGatewayLocationsUpdateZeroTrustGatewayLocationRequestEndpointsDot $dot = null,
		public ?ZeroTrustGatewayLocationsUpdateZeroTrustGatewayLocationRequestEndpointsIpv4 $ipv4 = null,
		public ?ZeroTrustGatewayLocationsUpdateZeroTrustGatewayLocationRequestEndpointsIpv6 $ipv6 = null,
	) {
	}
}
