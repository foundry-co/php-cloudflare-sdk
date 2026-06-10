<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specify activity log settings.
 */
readonly class ZeroTrustAccountsPatchZeroTrustAccountConfigurationSettingsActivityLog
{
	public function __construct(
		/** Specify whether to log activity. */
		public ?bool $enabled = null,
	) {
	}
}
