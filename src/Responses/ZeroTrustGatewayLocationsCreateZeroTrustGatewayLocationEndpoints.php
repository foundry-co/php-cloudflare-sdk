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
readonly class ZeroTrustGatewayLocationsCreateZeroTrustGatewayLocationEndpoints
{
	public function __construct(
		public ?ZeroTrustGatewayLocationsCreateZeroTrustGatewayLocationEndpointsDoh $doh = null,
		public ?ZeroTrustGatewayLocationsCreateZeroTrustGatewayLocationEndpointsDot $dot = null,
		public ?ZeroTrustGatewayLocationsCreateZeroTrustGatewayLocationEndpointsIpv4 $ipv4 = null,
		public ?ZeroTrustGatewayLocationsCreateZeroTrustGatewayLocationEndpointsIpv6 $ipv6 = null,
	) {
	}
}
