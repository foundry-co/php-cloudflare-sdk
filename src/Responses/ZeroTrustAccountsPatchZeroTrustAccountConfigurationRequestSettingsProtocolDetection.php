<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specify whether to detect protocols from the initial bytes of client traffic.
 */
readonly class ZeroTrustAccountsPatchZeroTrustAccountConfigurationRequestSettingsProtocolDetection
{
	public function __construct(
		/** Specify whether to detect protocols from the initial bytes of client traffic. */
		public ?bool $enabled = null,
	) {
	}
}
