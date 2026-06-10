<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new Site LAN
 */
readonly class MagicSiteLansCreateLanRequest
{
	public function __construct(
		public ?int $bondId = null,
		/** mark true to use this LAN for HA probing. only works for site with HA turned on. only one LAN can be set as the ha_link. */
		public ?bool $haLink = null,
		/** mark true to use this LAN for source-based breakout traffic */
		public ?bool $isBreakout = null,
		/** mark true to use this LAN for source-based prioritized traffic */
		public ?bool $isPrioritized = null,
		public ?string $name = null,
		public ?\FoundryCo\Cloudflare\Responses\MagicSiteLansCreateLanRequestNat $nat = null,
		public ?int $physport = null,
		public ?array $routedSubnets = null,
		/** If the site is not configured in high availability mode, this configuration is optional (if omitted, use DHCP). However, if in high availability mode, static_address is required along with secondary and virtual address. */
		public ?\FoundryCo\Cloudflare\Responses\MagicSiteLansCreateLanRequestStaticAddressing $staticAddressing = null,
		/** VLAN ID. Use zero for untagged. */
		public ?int $vlanTag = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'bond_id' => $this->bondId,
		    'ha_link' => $this->haLink,
		    'is_breakout' => $this->isBreakout,
		    'is_prioritized' => $this->isPrioritized,
		    'name' => $this->name,
		    'nat' => $this->nat?->toArray(),
		    'physport' => $this->physport,
		    'routed_subnets' => $this->routedSubnets,
		    'static_addressing' => $this->staticAddressing?->toArray(),
		    'vlan_tag' => $this->vlanTag,
		], fn ($v) => $v !== null);
	}
}
