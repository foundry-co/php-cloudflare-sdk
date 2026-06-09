<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Physical mailing address for the registrant contact.
 */
readonly class RegistrarDomainRegistrationCreateRequestContactsRegistrantPostalInfoAddress
{
	public function __construct(
		/** City or locality name. */
		public string $city,
		/** Two-letter country code per ISO 3166-1 alpha-2 (e.g., `US`, `GB`, `CA`, `DE`). */
		public string $countryCode,
		/** Postal or ZIP code. */
		public string $postalCode,
		/** State, province, or region. Use the standard abbreviation where applicable (e.g., `TX` for Texas, `ON` for Ontario). */
		public string $state,
		/** Street address including building/suite number. */
		public string $street,
	) {
	}
}
