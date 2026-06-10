<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetAnnotationsAnnotationsItem
{
	public function __construct(
		public ?array $asns = null,
		public ?array $asnsDetails = null,
		public ?string $dataSource = null,
		public ?string $eventType = null,
		public ?string $id = null,
		public ?array $locations = null,
		public ?array $locationsDetails = null,
		public ?array $origins = null,
		public ?array $originsDetails = null,
		public ?RadarGetAnnotationsAnnotationsItemOutage $outage = null,
		public ?string $startDate = null,
		public ?string $description = null,
		public ?string $endDate = null,
		public ?string $linkedUrl = null,
		public ?string $scope = null,
	) {
	}
}
