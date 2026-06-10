<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Location of site in latitude and longitude.
 */
readonly class MagicSitesPatchSiteLocation
{
	public function __construct(
		/** Latitude */
		public ?string $lat = null,
		/** Longitude */
		public ?string $lon = null,
	) {
	}
}
