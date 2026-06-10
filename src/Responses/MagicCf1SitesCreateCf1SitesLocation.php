<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicCf1SitesCreateCf1SitesLocation
{
	public function __construct(
		/** Latitude of the CF1 Site. */
		public ?float $lat = null,
		/** Longitude of the CF1 Site. */
		public ?float $long = null,
		/** Name of nearest town, city, or village. */
		public ?string $name = null,
	) {
	}
}
