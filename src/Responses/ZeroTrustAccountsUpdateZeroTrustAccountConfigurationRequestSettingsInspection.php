<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Define the proxy inspection mode.
 */
readonly class ZeroTrustAccountsUpdateZeroTrustAccountConfigurationRequestSettingsInspection
{
	public function __construct(
		/** Define the proxy inspection mode.   1. static: Gateway applies static inspection to HTTP on TCP(80). With TLS decryption on, Gateway inspects HTTPS traffic on TCP(443) and UDP(443).   2. dynamic: Gateway applies protocol detection to inspect HTTP and HTTPS traffic on any port. TLS decryption must remain on to inspect HTTPS traffic. */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustAccountsUpdateZeroTrustAccountConfigurationRequestSettingsInspectionMode $mode = null,
	) {
	}
}
