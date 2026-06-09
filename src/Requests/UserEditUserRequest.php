<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Edit User
 */
readonly class UserEditUserRequest
{
	public function __construct(
		/** The country in which the user lives. */
		public ?string $country = null,
		/** User's first name */
		public ?string $firstName = null,
		/** User's last name */
		public ?string $lastName = null,
		/** User's telephone number */
		public ?string $telephone = null,
		/** The zipcode or postal code where the user lives. */
		public ?string $zipcode = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'country' => $this->country,
		    'first_name' => $this->firstName,
		    'last_name' => $this->lastName,
		    'telephone' => $this->telephone,
		    'zipcode' => $this->zipcode,
		], fn ($v) => $v !== null);
	}
}
