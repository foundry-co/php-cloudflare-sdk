<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configure settings that apply to quarantine rules. Settable only for `http` rules.
 */
readonly class ZeroTrustGatewayRulesUpdateZeroTrustGatewayRuleRequestRuleSettingsQuarantine
{
	public function __construct(
		/** Specify the types of files to sandbox. */
		public ?array $fileTypes = null,
	) {
	}
}
