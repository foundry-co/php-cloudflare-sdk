<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Details of the user associated to the membership.
 */
readonly class AccountMembersMemberDetailsUser
{
	public function __construct(
		/** The contact email address of the user. */
		public ?string $email = null,
		/** User's first name */
		public ?string $firstName = null,
		/** Identifier */
		public ?string $id = null,
		/** User's last name */
		public ?string $lastName = null,
		/** Indicates whether two-factor authentication is enabled for the user account. Does not apply to API authentication. */
		public ?bool $twoFactorAuthenticationEnabled = null,
	) {
	}
}
