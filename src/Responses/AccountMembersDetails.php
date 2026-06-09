<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountMembersDetails
{
	public function __construct(
		/** The contact email address of the user. */
		public ?string $email = null,
		/** Membership identifier tag. */
		public ?string $id = null,
		/** Access policy for the membership */
		public ?array $policies = null,
		/** Roles assigned to this Member. */
		public ?array $roles = null,
		/** A member's status in the account. */
		public ?\FoundryCo\Cloudflare\Enums\AccountMembersDetailsStatus $status = null,
		/** Details of the user associated to the membership. */
		public ?AccountMembersDetailsUser $user = null,
	) {
	}
}
