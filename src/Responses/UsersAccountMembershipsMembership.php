<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UsersAccountMembershipsMembership
{
	public function __construct(
		public ?UsersAccountMembershipsMembershipAccount $account = null,
		/** Enterprise only. Indicates whether or not API access is enabled specifically for this user on a given account. */
		public ?bool $apiAccessEnabled = null,
		/** Membership identifier tag. */
		public ?string $id = null,
		/** All access permissions for the user at the account. */
		public ?UsersAccountMembershipsMembershipPermissions $permissions = null,
		/** Access policy for the membership */
		public ?array $policies = null,
		/** List of role names the membership has for this account. */
		public ?array $roles = null,
		/** Status of this membership. */
		public ?\FoundryCo\Cloudflare\Enums\UsersAccountMembershipsMembershipStatus $status = null,
	) {
	}
}
