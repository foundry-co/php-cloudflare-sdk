<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGeolocationsGeolocationsGeolocationsItemParentParent
{
	public function __construct(
		public string $geoId,
		/** A numeric string. */
		public string $latitude,
		/** A numeric string. */
		public string $longitude,
		public string $name,
		/** The type of the geolocation. */
		public \FoundryCo\Cloudflare\Enums\RadarGeolocationsGeolocationsGeolocationsItemParentParentType $type,
		public ?string $code = null,
		/** BCP 47 locale code used for the geolocation name translation */
		public ?string $locale = null,
	) {
	}
}
