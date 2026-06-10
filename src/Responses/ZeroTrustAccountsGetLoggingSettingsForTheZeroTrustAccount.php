<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustAccountsGetLoggingSettingsForTheZeroTrustAccount
{
	public function __construct(
		/** Indicate whether to redact personally identifiable information from activity logging (PII fields include source IP, user email, user ID, device ID, URL, referrer, and user agent). */
		public ?bool $redactPii = null,
		/** Configure logging settings for each rule type. */
		public ?ZeroTrustAccountsGetLoggingSettingsForTheZeroTrustAccountSettingsByRuleType $settingsByRuleType = null,
	) {
	}
}
