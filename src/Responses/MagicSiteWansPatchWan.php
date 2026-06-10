<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicSiteWansPatchWan
{
	public function __construct(
		/** Magic WAN health check rate for tunnels created on this link. The default value is `mid`. */
		public ?\FoundryCo\Cloudflare\Enums\MagicSiteWansPatchWanHealthCheckRate $healthCheckRate = null,
		/** Identifier */
		public ?string $id = null,
		public ?string $name = null,
		public ?int $physport = null,
		/** Priority of WAN for traffic loadbalancing. */
		public ?int $priority = null,
		/** Identifier */
		public ?string $siteId = null,
		/** (optional) if omitted, use DHCP. Submit secondary_address when site is in high availability mode. */
		public ?MagicSiteWansPatchWanStaticAddressing $staticAddressing = null,
		/** VLAN ID. Use zero for untagged. */
		public ?int $vlanTag = null,
	) {
	}
}
