<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specify whether to enable the sandbox.
 */
readonly class ZeroTrustAccountsGetZeroTrustAccountConfigurationSettingsSandbox
{
	public function __construct(
		/** Specify whether to enable the sandbox. */
		public ?bool $enabled = null,
		/** Specify the action to take when the system cannot scan the file. */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustAccountsGetZeroTrustAccountConfigurationSettingsSandboxFallbackAction $fallbackAction = null,
	) {
	}
}
