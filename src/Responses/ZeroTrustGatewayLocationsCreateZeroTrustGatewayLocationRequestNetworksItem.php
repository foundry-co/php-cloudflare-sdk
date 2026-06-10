<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustGatewayLocationsCreateZeroTrustGatewayLocationRequestNetworksItem
{
	public function __construct(
		/** Specify the IPv4 address or IPv4 CIDR. Limit IPv4 CIDRs to a maximum of /24. */
		public ?string $network = null,
	) {
	}
}
