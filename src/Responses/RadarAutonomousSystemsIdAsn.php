<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarAutonomousSystemsIdAsn
{
	public function __construct(
		public int $asn,
		public int $confidenceLevel,
		public string $country,
		public string $countryName,
		public RadarAutonomousSystemsIdAsnEstimatedUsers $estimatedUsers,
		public string $name,
		public string $orgName,
		public array $related,
		/** Regional Internet Registry. */
		public string $source,
		public string $website,
		public ?string $aka = null,
	) {
	}
}
