<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specify FIPS settings.
 */
readonly class ZeroTrustAccountsPatchZeroTrustAccountConfigurationRequestSettingsFips
{
	public function __construct(
		/** Enforce cipher suites and TLS versions compliant with FIPS 140-2. */
		public ?bool $tls = null,
	) {
	}
}
