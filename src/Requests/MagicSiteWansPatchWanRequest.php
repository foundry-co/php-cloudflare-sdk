<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Patch Site WAN
 */
readonly class MagicSiteWansPatchWanRequest
{
	public function __construct(
		public ?string $name = null,
		public ?int $physport = null,
		public ?int $priority = null,
		/** (optional) if omitted, use DHCP. Submit secondary_address when site is in high availability mode. */
		public ?\FoundryCo\Cloudflare\Responses\MagicSiteWansPatchWanRequestStaticAddressing $staticAddressing = null,
		/** VLAN ID. Use zero for untagged. */
		public ?int $vlanTag = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'physport' => $this->physport,
		    'priority' => $this->priority,
		    'static_addressing' => $this->staticAddressing?->toArray(),
		    'vlan_tag' => $this->vlanTag,
		], fn ($v) => $v !== null);
	}
}
