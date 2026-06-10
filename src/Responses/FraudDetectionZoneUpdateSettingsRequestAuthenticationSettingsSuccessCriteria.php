<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class FraudDetectionZoneUpdateSettingsRequestAuthenticationSettingsSuccessCriteria
{
	public function __construct(
		/** The type of criterion. Currently only `status_code` is supported. */
		public ?\FoundryCo\Cloudflare\Enums\FraudDetectionZoneUpdateSettingsRequestAuthenticationSettingsSuccessCriteriaKind $kind = null,
		/**
		 * HTTP status codes to match against the origin response.
		 * - Maximum of 10 codes per criterion.
		 * - Each code must be a valid HTTP status code (100-599).
		 * - Codes are deduplicated and sorted on save.
		 * - Omit to leave unchanged on update.
		 * - Provide an empty array `[]` to clear codes on update.
		 */
		public ?array $statusCodes = null,
	) {
	}
}
