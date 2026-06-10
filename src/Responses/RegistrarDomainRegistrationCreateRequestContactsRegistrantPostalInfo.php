<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Postal/mailing information for the registrant contact.
 */
readonly class RegistrarDomainRegistrationCreateRequestContactsRegistrantPostalInfo
{
	public function __construct(
		/** Physical mailing address for the registrant contact. */
		public ?RegistrarDomainRegistrationCreateRequestContactsRegistrantPostalInfoAddress $address = null,
		/** Full legal name of the registrant (individual or authorized representative). */
		public ?string $name = null,
		/** Organization or company name. Optional for individual registrants. */
		public ?string $organization = null,
	) {
	}
}
