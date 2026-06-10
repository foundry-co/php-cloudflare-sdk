<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configure session check behavior. Settable only for `l4` and `http` rules with the action set to `allow`.
 */
readonly class ZeroTrustGatewayRulesListZeroTrustGatewayRulesTenantRuleSettingsCheckSession
{
	public function __construct(
		/** Sets the required session freshness threshold. The API returns a normalized version of this value. */
		public ?string $duration = null,
		/** Enable session enforcement. */
		public ?bool $enforce = null,
	) {
	}
}
