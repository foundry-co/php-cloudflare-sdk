<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configure logging settings for each rule type.
 */
readonly class ZeroTrustAccountsUpdateLoggingSettingsForTheZeroTrustAccountSettingsByRuleType
{
	public function __construct(
		/** Configure logging settings for DNS firewall. */
		public ?ZeroTrustAccountsUpdateLoggingSettingsForTheZeroTrustAccountSettingsByRuleTypeDns $dns = null,
		/** Configure logging settings for HTTP/HTTPS firewall. */
		public ?ZeroTrustAccountsUpdateLoggingSettingsForTheZeroTrustAccountSettingsByRuleTypeHttp $http = null,
		/** Configure logging settings for Network firewall. */
		public ?ZeroTrustAccountsUpdateLoggingSettingsForTheZeroTrustAccountSettingsByRuleTypeL4 $l4 = null,
	) {
	}
}
