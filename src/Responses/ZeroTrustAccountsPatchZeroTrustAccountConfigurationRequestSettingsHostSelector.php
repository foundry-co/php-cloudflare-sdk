<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Enable host selection in egress policies.
 */
readonly class ZeroTrustAccountsPatchZeroTrustAccountConfigurationRequestSettingsHostSelector
{
	public function __construct(
		/** Specify whether to enable filtering via hosts for egress policies. */
		public ?bool $enabled = null,
	) {
	}
}
