<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configure whether a copy of the HTTP request will be sent to storage when the rule matches.
 */
readonly class ZeroTrustGatewayRulesListZeroTrustGatewayRulesRuleSettingsForensicCopy
{
	public function __construct(
		/** Enable sending the copy to storage. */
		public ?bool $enabled = null,
	) {
	}
}
