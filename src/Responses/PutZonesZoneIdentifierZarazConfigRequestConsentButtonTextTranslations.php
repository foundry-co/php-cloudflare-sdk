<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PutZonesZoneIdentifierZarazConfigRequestConsentButtonTextTranslations
{
	public function __construct(
		/** Object where keys are language codes. */
		public ?array $acceptAll = null,
		/** Object where keys are language codes. */
		public ?array $confirmMyChoices = null,
		/** Object where keys are language codes. */
		public ?array $rejectAll = null,
	) {
	}
}
