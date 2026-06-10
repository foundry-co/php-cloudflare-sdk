<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Detailed member information for a User Group member.
 */
readonly class AccountUserGroupMemberGet
{
	public function __construct(
		/** Account member identifier. */
		public ?string $id = null,
		/** When the member was added to the user group. */
		public ?\DateTimeImmutable $createdAt = null,
		/** The contact email address of the user. */
		public ?string $email = null,
		/** The member's status in the account. */
		public ?\FoundryCo\Cloudflare\Enums\AccountUserGroupMemberGetStatus $status = null,
		/** Details of the user associated with this membership. */
		public ?AccountUserGroupMemberGetUser $user = null,
	) {
	}
}
