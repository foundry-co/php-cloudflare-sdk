<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Geodata for tracing request
 */
readonly class AccountRequestTracerRequestTraceRequestContextGeoloc
{
	public function __construct(
		public ?string $city = null,
		public ?string $continent = null,
		public ?bool $isEuCountry = null,
		public ?string $isoCode = null,
		public ?float $latitude = null,
		public ?float $longitude = null,
		public ?string $postalCode = null,
		public ?string $regionCode = null,
		public ?string $subdivision2IsoCode = null,
		public ?string $timezone = null,
	) {
	}
}
