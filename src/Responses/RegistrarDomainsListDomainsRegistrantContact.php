<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RegistrarDomainsListDomainsRegistrantContact
{
	public function __construct(
		/** Address. */
		public ?string $address = null,
		/** City. */
		public ?string $city = null,
		/** The country in which the user lives. */
		public ?string $country = null,
		/** User's first name */
		public ?string $firstName = null,
		/** User's last name */
		public ?string $lastName = null,
		/** Name of organization. */
		public ?string $organization = null,
		/** User's telephone number */
		public ?string $phone = null,
		/** State. */
		public ?string $state = null,
		/** The zipcode or postal code where the user lives. */
		public ?string $zip = null,
		/** Optional address line for unit, floor, suite, etc. */
		public ?string $address2 = null,
		/** The contact email address of the user. */
		public ?string $email = null,
		/** Contact fax number. */
		public ?string $fax = null,
		/** Contact Identifier. */
		public ?string $id = null,
	) {
	}
}
