<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicRedundancyGroupsUpdateRedundancyGroupRequestMembersItem
{
	public function __construct(
		/** UUID of the tunnel or interconnect */
		public ?string $id = null,
		/** Tunnel type: gre, ipsec, or cni */
		public ?\FoundryCo\Cloudflare\Enums\MagicRedundancyGroupsUpdateRedundancyGroupRequestMembersItemType $type = null,
	) {
	}
}
