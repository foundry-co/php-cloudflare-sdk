<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarTrafficAnomaliesAnomaliesTrafficAnomaliesItem
{
	public function __construct(
		public string $startDate,
		public string $status,
		public string $type,
		public string $uuid,
		public ?RadarTrafficAnomaliesAnomaliesTrafficAnomaliesItemAsnDetails $asnDetails = null,
		public ?\DateTimeImmutable $endDate = null,
		public ?RadarTrafficAnomaliesAnomaliesTrafficAnomaliesItemLocationDetails $locationDetails = null,
		public ?RadarTrafficAnomaliesAnomaliesTrafficAnomaliesItemOriginDetails $originDetails = null,
		public ?array $visibleInDataSources = null,
	) {
	}
}
