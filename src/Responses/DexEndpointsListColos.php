<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DexEndpointsListColos
{
	public function __construct(
		/** Airport code */
		public ?string $airportCode = null,
		/** City */
		public ?string $city = null,
		/** Country code */
		public ?string $countryCode = null,
	) {
	}
}
