<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configure behavior when an upstream certificate is invalid or an SSL error occurs. Settable only for `http` rules with the action set to `allow`.
 */
readonly class ZeroTrustGatewayRulesListZeroTrustGatewayRulesTenantRuleSettingsUntrustedCert
{
	public function __construct(
		/** Defines the action performed when an untrusted certificate seen. The default action an error with HTTP code 526. */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustGatewayRulesListZeroTrustGatewayRulesTenantRuleSettingsUntrustedCertAction $action = null,
	) {
	}
}
