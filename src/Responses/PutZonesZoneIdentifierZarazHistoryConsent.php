<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Consent management configuration.
 */
readonly class PutZonesZoneIdentifierZarazHistoryConsent
{
	public function __construct(
		public ?bool $enabled = null,
		public ?PutZonesZoneIdentifierZarazHistoryConsentButtonTextTranslations $buttonTextTranslations = null,
		public ?string $companyEmail = null,
		public ?string $companyName = null,
		public ?string $companyStreetAddress = null,
		public ?string $consentModalIntroHTML = null,
		/** Object where keys are language codes. */
		public ?array $consentModalIntroHTMLWithTranslations = null,
		public ?string $cookieName = null,
		public ?string $customCSS = null,
		public ?bool $customIntroDisclaimerDismissed = null,
		public ?string $defaultLanguage = null,
		public ?bool $hideModal = null,
		/** Object where keys are purpose alpha-numeric IDs. */
		public ?array $purposes = null,
		/** Object where keys are purpose alpha-numeric IDs. */
		public ?array $purposesWithTranslations = null,
		public ?bool $tcfCompliant = null,
	) {
	}
}
