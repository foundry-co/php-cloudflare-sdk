<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Details of the user associated with this membership.
 */
readonly class AccountUserGroupMemberGetUser
{
	public function __construct(
		/** The contact email address of the user. */
		public ?string $email = null,
		/** User's first name. */
		public ?string $firstName = null,
		/** User identifier tag. */
		public ?string $id = null,
		/** User's last name. */
		public ?string $lastName = null,
	) {
	}
}
