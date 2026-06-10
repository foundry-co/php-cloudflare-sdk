<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Registrant contact data for the domain registration. This information
 * is submitted to the domain registry and, depending on extension and
 * privacy settings, may appear in public WHOIS records.
 */
readonly class RegistrarDomainRegistrationCreateRequestContactsRegistrant
{
	public function __construct(
		/**
		 * Email address for the registrant. Used for domain-related
		 * communications from the registry, including ownership verification
		 * and renewal notices.
		 */
		public ?string $email = null,
		/**
		 * Phone number in E.164 format: `+{country_code}.{number}` with no
		 * spaces or dashes. Examples: `+1.5555555555` (US), `+44.2071234567`
		 * (UK), `+81.312345678` (Japan).
		 */
		public ?string $phone = null,
		/** Postal/mailing information for the registrant contact. */
		public ?RegistrarDomainRegistrationCreateRequestContactsRegistrantPostalInfo $postalInfo = null,
		/**
		 * Fax number in E.164 format (e.g., `+1.5555555555`). Optional.
		 * Most registrations do not require a fax number.
		 */
		public ?string $fax = null,
	) {
	}
}
