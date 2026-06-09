<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * If the site is not configured in high availability mode, this configuration is optional (if omitted, use DHCP). However, if in high availability mode, static_address is required along with secondary and virtual address.
 */
readonly class MagicSiteLANsLansStaticAddressing
{
	public function __construct(
		/** A valid CIDR notation representing an IP range. */
		public string $address,
		public ?MagicSiteLANsLansStaticAddressingDhcpRelay $dhcpRelay = null,
		public ?MagicSiteLANsLansStaticAddressingDhcpServer $dhcpServer = null,
		/** A valid CIDR notation representing an IP range. */
		public ?string $secondaryAddress = null,
		/** A valid CIDR notation representing an IP range. */
		public ?string $virtualAddress = null,
	) {
	}
}
