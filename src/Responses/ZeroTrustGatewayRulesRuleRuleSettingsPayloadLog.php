<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configure DLP payload logging. Settable only for `http` rules.
 */
readonly class ZeroTrustGatewayRulesRuleRuleSettingsPayloadLog
{
	public function __construct(
		/** Enable DLP payload logging for this rule. */
		public ?bool $enabled = null,
	) {
	}
}
