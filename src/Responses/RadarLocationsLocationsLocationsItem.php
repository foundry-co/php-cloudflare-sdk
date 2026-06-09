<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarLocationsLocationsLocationsItem
{
	public function __construct(
		public string $alpha2,
		public string $continent,
		/** A numeric string. */
		public string $latitude,
		/** A numeric string. */
		public string $longitude,
		public string $name,
		public string $region,
		public string $subregion,
	) {
	}
}
