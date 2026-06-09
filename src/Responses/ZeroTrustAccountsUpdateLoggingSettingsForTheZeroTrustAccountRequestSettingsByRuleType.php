<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configure logging settings for each rule type.
 */
readonly class ZeroTrustAccountsUpdateLoggingSettingsForTheZeroTrustAccountRequestSettingsByRuleType
{
	public function __construct(
		/** Configure logging settings for DNS firewall. */
		public ?ZeroTrustAccountsUpdateLoggingSettingsForTheZeroTrustAccountRequestSettingsByRuleTypeDns $dns = null,
		/** Configure logging settings for HTTP/HTTPS firewall. */
		public ?ZeroTrustAccountsUpdateLoggingSettingsForTheZeroTrustAccountRequestSettingsByRuleTypeHttp $http = null,
		/** Configure logging settings for Network firewall. */
		public ?ZeroTrustAccountsUpdateLoggingSettingsForTheZeroTrustAccountRequestSettingsByRuleTypeL4 $l4 = null,
	) {
	}
}
