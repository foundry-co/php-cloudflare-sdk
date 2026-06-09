<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UsersAccountMembershipsMembershipAccount
{
	public function __construct(
		public array $id,
		/** Account name */
		public string $name,
		public array $type,
		/** Timestamp for the creation of the account */
		public ?\DateTimeImmutable $createdOn = null,
		/** Parent container details */
		public ?UsersAccountMembershipsMembershipAccountManagedBy $managedBy = null,
		/** Account settings */
		public ?UsersAccountMembershipsMembershipAccountSettings $settings = null,
	) {
	}
}
