<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetTrafficAnomaliesTrafficAnomaliesItem
{
	public function __construct(
		public ?string $startDate = null,
		public ?string $status = null,
		public ?string $type = null,
		public ?string $uuid = null,
		public ?RadarGetTrafficAnomaliesTrafficAnomaliesItemAsnDetails $asnDetails = null,
		public ?\DateTimeImmutable $endDate = null,
		public ?RadarGetTrafficAnomaliesTrafficAnomaliesItemLocationDetails $locationDetails = null,
		public ?RadarGetTrafficAnomaliesTrafficAnomaliesItemOriginDetails $originDetails = null,
		public ?array $visibleInDataSources = null,
	) {
	}
}
