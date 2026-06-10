<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class FraudDetectionZoneGetSettings
{
	public function __construct(
		/**
		 * Configuration for classifying login authentication outcomes based on the origin response.
		 * Requires `user_profiles` to be enabled.
		 *
		 * - Success and failure criteria are independently updatable — sending only `success_criteria`
		 *   leaves failure codes untouched, and vice versa.
		 * - Omit `authentication_settings` entirely to leave both unchanged.
		 * - Status codes must not overlap between success and failure criteria.
		 */
		public ?FraudDetectionZoneGetSettingsAuthenticationSettings $authenticationSettings = null,
		/** Whether Fraud User Profiles is enabled for the zone. */
		public ?\FoundryCo\Cloudflare\Enums\FraudDetectionZoneGetSettingsUserProfiles $userProfiles = null,
		/**
		 * List of expressions to detect usernames in write HTTP requests.
		 *
		 * - Maximum of 10 expressions.
		 * - Omit or set to null to leave unchanged on update.
		 * - Provide an empty array `[]` to clear all expressions on update.
		 * - Invalid expressions will result in a 10400 Bad Request with details in the `messages` array.
		 */
		public ?array $usernameExpressions = null,
	) {
	}
}
