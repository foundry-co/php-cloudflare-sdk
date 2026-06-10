<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configures multi-factor authentication (MFA) settings for an organization.
 */
readonly class ZeroTrustOrganizationCreateYourZeroTrustOrganizationRequestMfaConfig
{
	public function __construct(
		/** Lists the MFA methods that users can authenticate with. */
		public ?array $allowedAuthenticators = null,
		/** Allows a user to skip MFA via Authentication Method Reference (AMR) matching when the AMR claim provided by the IdP the user used to authenticate contains "mfa". Must be in minutes (m) or hours (h). Minimum: 0m. Maximum: 720h (30 days). */
		public ?string $amrMatchingSessionDuration = null,
		/** Specifies a Cloudflare List of required FIDO2 authenticator device AAGUIDs. */
		public ?string $requiredAaguids = null,
		/** Defines the duration of an MFA session. Must be in minutes (m) or hours (h). Minimum: 0m. Maximum: 720h (30 days). Examples:`5m` or `24h`. */
		public ?string $sessionDuration = null,
	) {
	}
}
