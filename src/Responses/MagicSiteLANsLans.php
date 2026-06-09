<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicSiteLANsLans
{
	public function __construct(
		public ?int $bondId = null,
		/** mark true to use this LAN for HA probing. only works for site with HA turned on. only one LAN can be set as the ha_link. */
		public ?bool $haLink = null,
		/** Identifier */
		public ?string $id = null,
		/** mark true to use this LAN for source-based breakout traffic */
		public ?bool $isBreakout = null,
		/** mark true to use this LAN for source-based prioritized traffic */
		public ?bool $isPrioritized = null,
		public ?string $name = null,
		public ?MagicSiteLANsLansNat $nat = null,
		public ?int $physport = null,
		public ?array $routedSubnets = null,
		/** Identifier */
		public ?string $siteId = null,
		/** If the site is not configured in high availability mode, this configuration is optional (if omitted, use DHCP). However, if in high availability mode, static_address is required along with secondary and virtual address. */
		public ?MagicSiteLANsLansStaticAddressing $staticAddressing = null,
		/** VLAN ID. Use zero for untagged. */
		public ?int $vlanTag = null,
	) {
	}
}
