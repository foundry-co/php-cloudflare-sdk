<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Define the settings for the Audit SSH action. Settable only for `l4` rules with `audit_ssh` action.
 */
readonly class ZeroTrustGatewayRulesResetExpirationZeroTrustGatewayRuleRuleSettingsAuditSsh
{
	public function __construct(
		/** Enable SSH command logging. */
		public ?bool $commandLogging = null,
	) {
	}
}
