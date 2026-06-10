<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetGeolocationDetailsGeolocationParentParent
{
	public function __construct(
		public ?string $geoId = null,
		/** A numeric string. */
		public ?string $latitude = null,
		/** A numeric string. */
		public ?string $longitude = null,
		public ?string $name = null,
		/** The type of the geolocation. */
		public ?\FoundryCo\Cloudflare\Enums\RadarGetGeolocationDetailsGeolocationParentParentType $type = null,
		public ?string $code = null,
		/** BCP 47 locale code used for the geolocation name translation */
		public ?string $locale = null,
	) {
	}
}
