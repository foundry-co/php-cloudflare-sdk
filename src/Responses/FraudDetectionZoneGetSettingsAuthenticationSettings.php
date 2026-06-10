<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configuration for classifying login authentication outcomes based on the origin response.
 * Requires `user_profiles` to be enabled.
 *
 * - Success and failure criteria are independently updatable — sending only `success_criteria`
 *   leaves failure codes untouched, and vice versa.
 * - Omit `authentication_settings` entirely to leave both unchanged.
 * - Status codes must not overlap between success and failure criteria.
 */
readonly class FraudDetectionZoneGetSettingsAuthenticationSettings
{
	public function __construct(
		/** Criterion for identifying failed login responses. */
		public ?FraudDetectionZoneGetSettingsAuthenticationSettingsFailureCriteria $failureCriteria = null,
		/** Criterion for identifying successful login responses. */
		public ?FraudDetectionZoneGetSettingsAuthenticationSettingsSuccessCriteria $successCriteria = null,
	) {
	}
}
