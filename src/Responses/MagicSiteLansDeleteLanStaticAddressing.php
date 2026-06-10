<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * If the site is not configured in high availability mode, this configuration is optional (if omitted, use DHCP). However, if in high availability mode, static_address is required along with secondary and virtual address.
 */
readonly class MagicSiteLansDeleteLanStaticAddressing
{
	public function __construct(
		/** A valid CIDR notation representing an IP range. */
		public ?string $address = null,
		public ?MagicSiteLansDeleteLanStaticAddressingDhcpRelay $dhcpRelay = null,
		public ?MagicSiteLansDeleteLanStaticAddressingDhcpServer $dhcpServer = null,
		/** A valid CIDR notation representing an IP range. */
		public ?string $secondaryAddress = null,
		/** A valid CIDR notation representing an IP range. */
		public ?string $virtualAddress = null,
	) {
	}
}
