<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UserUser
{
	public function __construct(
		/** Current email address of the user. */
		public string $email,
		/** Identifier of the user. */
		public string $id,
		/** Lists the betas that the user is participating in. */
		public ?array $betas = null,
		/** The country in which the user lives. */
		public ?string $country = null,
		/** User's first name */
		public ?string $firstName = null,
		/** Indicates whether user has any business zones */
		public ?bool $hasBusinessZones = null,
		/** Indicates whether user has any enterprise zones */
		public ?bool $hasEnterpriseZones = null,
		/** Indicates whether user has any pro zones */
		public ?bool $hasProZones = null,
		/** User's last name */
		public ?string $lastName = null,
		public ?array $organizations = null,
		/** Indicates whether user has been suspended */
		public ?bool $suspended = null,
		/** User's telephone number */
		public ?string $telephone = null,
		/** Indicates whether two-factor authentication is enabled for the user account. Does not apply to API authentication. */
		public ?bool $twoFactorAuthenticationEnabled = null,
		/** Indicates whether two-factor authentication is required by one of the accounts that the user is a member of. */
		public ?bool $twoFactorAuthenticationLocked = null,
		/** The zipcode or postal code where the user lives. */
		public ?string $zipcode = null,
	) {
	}
}
