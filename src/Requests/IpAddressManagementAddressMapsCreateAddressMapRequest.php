<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Address Map
 */
readonly class IpAddressManagementAddressMapsCreateAddressMapRequest
{
	public function __construct(
		/** An optional description field which may be used to describe the types of IPs or zones on the map. */
		public ?string $description = null,
		/** Whether the Address Map is enabled or not. Cloudflare's DNS will not respond with IP addresses on an Address Map until the map is enabled. */
		public ?bool $enabled = null,
		public ?array $ips = null,
		/** Zones and Accounts which will be assigned IPs on this Address Map. A zone membership will take priority over an account membership. */
		public ?array $memberships = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		    'enabled' => $this->enabled,
		    'ips' => $this->ips,
		    'memberships' => $this->memberships,
		], fn ($v) => $v !== null);
	}
}
