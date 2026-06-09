<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustGatewayLocationsLocationsNetworksItem
{
	public function __construct(
		/** Specify the IPv4 address or IPv4 CIDR. Limit IPv4 CIDRs to a maximum of /24. */
		public string $network,
	) {
	}
}
