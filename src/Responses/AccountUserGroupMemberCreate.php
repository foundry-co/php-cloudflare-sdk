<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Member attached to a User Group.
 */
readonly class AccountUserGroupMemberCreate
{
	public function __construct(
		/** Account member identifier. */
		public ?string $id = null,
		/** The contact email address of the user. */
		public ?string $email = null,
		/** The member's status in the account. */
		public ?\FoundryCo\Cloudflare\Enums\AccountUserGroupMemberCreateStatus $status = null,
	) {
	}
}
