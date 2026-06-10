<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetEntitiesLocationsLocationsItem
{
	public function __construct(
		public ?string $alpha2 = null,
		public ?string $continent = null,
		/** A numeric string. */
		public ?string $latitude = null,
		/** A numeric string. */
		public ?string $longitude = null,
		public ?string $name = null,
		public ?string $region = null,
		public ?string $subregion = null,
	) {
	}
}
