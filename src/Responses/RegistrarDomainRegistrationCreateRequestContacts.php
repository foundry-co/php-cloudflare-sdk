<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Contact data for the registration request.
 *
 * If the `contacts` object is omitted entirely from the request, or if
 * `contacts.registrant` is not provided, the system will use the account's
 * default address book entry as the registrant contact. This default must be
 * pre-configured by the account owner at
 * `https://dash.cloudflare.com/{account_id}/domains/registrations`, where
 * they can create or update the address book entry and accept the required
 * agreement. No API exists for managing address book entries at this time.
 *
 * If no default address book entry exists and no registrant contact is
 * provided, the registration request will fail with a validation error.
 */
readonly class RegistrarDomainRegistrationCreateRequestContacts
{
	public function __construct(
		/**
		 * Registrant contact data for the domain registration. This information
		 * is submitted to the domain registry and, depending on extension and
		 * privacy settings, may appear in public WHOIS records.
		 */
		public ?RegistrarDomainRegistrationCreateRequestContactsRegistrant $registrant = null,
	) {
	}
}
