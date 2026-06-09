<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specify Clientless Browser Isolation settings.
 */
readonly class ZeroTrustAccountsPatchZeroTrustAccountConfigurationRequestSettingsBrowserIsolation
{
	public function __construct(
		/** Specify whether to enable non-identity onramp support for Browser Isolation. */
		public ?bool $nonIdentityEnabled = null,
		/** Specify whether to enable Clientless Browser Isolation. */
		public ?bool $urlBrowserIsolationEnabled = null,
	) {
	}
}
