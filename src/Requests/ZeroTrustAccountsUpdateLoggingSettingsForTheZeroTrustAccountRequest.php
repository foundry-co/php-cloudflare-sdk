<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Zero Trust account logging settings
 */
readonly class ZeroTrustAccountsUpdateLoggingSettingsForTheZeroTrustAccountRequest
{
	public function __construct(
		/** Indicate whether to redact personally identifiable information from activity logging (PII fields include source IP, user email, user ID, device ID, URL, referrer, and user agent). */
		public ?bool $redactPii = null,
		/** Configure logging settings for each rule type. */
		public ?\FoundryCo\Cloudflare\Responses\ZeroTrustAccountsUpdateLoggingSettingsForTheZeroTrustAccountRequestSettingsByRuleType $settingsByRuleType = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'redact_pii' => $this->redactPii,
		    'settings_by_rule_type' => $this->settingsByRuleType?->toArray(),
		], fn ($v) => $v !== null);
	}
}
