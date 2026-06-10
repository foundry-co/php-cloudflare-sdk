<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicSiteAclsPatchAclLan2
{
	public function __construct(
		/** The identifier for the LAN you want to create an ACL policy with. */
		public ?string $lanId = null,
		/** The name of the LAN based on the provided lan_id. */
		public ?string $lanName = null,
		/** Array of port ranges on the provided LAN that will be included in the ACL. If no ports or port rangess are provided, communication on any port on this LAN is allowed. */
		public ?array $portRanges = null,
		/** Array of ports on the provided LAN that will be included in the ACL. If no ports or port ranges are provided, communication on any port on this LAN is allowed. */
		public ?array $ports = null,
		/** Array of subnet IPs within the LAN that will be included in the ACL. If no subnets are provided, communication on any subnets on this LAN are allowed. */
		public ?array $subnets = null,
	) {
	}
}
