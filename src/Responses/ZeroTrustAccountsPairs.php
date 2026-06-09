<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustAccountsPairs
{
	public function __construct(
		/** Specify the geographic location of this CIDR pair. */
		public ZeroTrustAccountsPairsGeolocation $geolocation,
		/** Specify the IPv4 address of this egress CIDR pair. */
		public string $ipv4,
		/** Specify the colocation from which this IPv4 address egresses. */
		public string $ipv4ColoName,
		/** Specify the IPv6 network address of this egress CIDR pair. */
		public string $ipv6Cidr,
	) {
	}
}
