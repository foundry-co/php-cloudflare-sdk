<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustAccountsUpdateLoggingSettingsForTheZeroTrustAccountRequestSettingsByRuleTypeL4
{
	public function __construct(
		/** Specify whether to log all requests to this service. */
		public ?bool $logAll = null,
		/** Specify whether to log only blocking requests to this service. */
		public ?bool $logBlocks = null,
	) {
	}
}
