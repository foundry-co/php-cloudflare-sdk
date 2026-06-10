<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Geographic location information. All fields are returned as the literal string `"REDACTED"` for callers that do not have the PII permission.
 */
readonly class DexEndpointsListDeviceIspsIspsItemIpLocation
{
	public function __construct(
		/** City name. Returned as `"REDACTED"` without PII permission. */
		public ?string $city = null,
		/** Country ISO code. Returned as `"REDACTED"` without PII permission. */
		public ?string $countryIso = null,
		/** State/province ISO code. Returned as `"REDACTED"` without PII permission. */
		public ?string $stateIso = null,
		/** ZIP/postal code. Returned as `"REDACTED"` without PII permission. */
		public ?string $zip = null,
	) {
	}
}
