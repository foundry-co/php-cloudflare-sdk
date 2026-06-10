<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountMembersAddMemberRolesItem
{
	public function __construct(
		/** Description of role's permissions. */
		public ?string $description = null,
		/** Role identifier tag. */
		public ?string $id = null,
		/** Role name. */
		public ?string $name = null,
		public ?AccountMembersAddMemberRolesItemPermissions $permissions = null,
	) {
	}
}
