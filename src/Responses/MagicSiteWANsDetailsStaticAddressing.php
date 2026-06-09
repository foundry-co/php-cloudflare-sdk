<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * (optional) if omitted, use DHCP. Submit secondary_address when site is in high availability mode.
 */
readonly class MagicSiteWANsDetailsStaticAddressing
{
	public function __construct(
		/** A valid CIDR notation representing an IP range. */
		public string $address,
		/** A valid IPv4 address. */
		public string $gatewayAddress,
		/** A valid CIDR notation representing an IP range. */
		public ?string $secondaryAddress = null,
	) {
	}
}
