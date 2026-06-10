<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicRedundancyGroupsListRedundancyGroupsRedundancyGroupsItemMemberDataItem
{
	public function __construct(
		/** Full tunnel object as returned by the corresponding endpoint */
		public ?array $data = null,
		/** Tunnel type */
		public ?\FoundryCo\Cloudflare\Enums\MagicRedundancyGroupsListRedundancyGroupsRedundancyGroupsItemMemberDataItemType $type = null,
	) {
	}
}
