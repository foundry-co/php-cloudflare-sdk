<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A named group of permissions that map to a group of operations against resources.
 */
readonly class AccountUserGroupUpdatePoliciesItemPermissionGroupsItem
{
	public function __construct(
		/** Identifier of the permission group. */
		public ?string $id = null,
		/** Attributes associated to the permission group. */
		public ?AccountUserGroupUpdatePoliciesItemPermissionGroupsItemMeta $meta = null,
		/** Name of the permission group. */
		public ?string $name = null,
	) {
	}
}
