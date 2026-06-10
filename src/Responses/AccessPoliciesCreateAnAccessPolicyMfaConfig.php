<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configures multi-factor authentication (MFA) settings.
 */
readonly class AccessPoliciesCreateAnAccessPolicyMfaConfig
{
	public function __construct(
		/** Lists the MFA methods that users can authenticate with. */
		public ?array $allowedAuthenticators = null,
		/** Indicates whether to disable MFA for this resource. This option is available at the application and policy level. */
		public ?bool $mfaDisabled = null,
		/** Defines the duration of an MFA session. Must be in minutes (m) or hours (h). Minimum: 0m. Maximum: 720h (30 days). Examples:`5m` or `24h`. */
		public ?string $sessionDuration = null,
	) {
	}
}
