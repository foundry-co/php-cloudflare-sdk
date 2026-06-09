<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicSiteLANsLanStaticAddressingDhcpServer
{
	public function __construct(
		/** Optional list of custom DHCP options to include in DHCP responses. Only valid when DHCP server is enabled. */
		public ?array $dhcpOptions = null,
		public ?array $dhcpPoolEnd = null,
		public ?array $dhcpPoolStart = null,
		public ?array $dnsServer = null,
		public ?array $dnsServers = null,
		/** Mapping of MAC addresses to IP addresses */
		public ?array $reservations = null,
	) {
	}
}
