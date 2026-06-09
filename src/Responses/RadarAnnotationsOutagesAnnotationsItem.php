<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarAnnotationsOutagesAnnotationsItem
{
	public function __construct(
		public array $asns,
		public array $asnsDetails,
		public string $dataSource,
		public string $eventType,
		public string $id,
		public array $locations,
		public array $locationsDetails,
		public array $origins,
		public array $originsDetails,
		public RadarAnnotationsOutagesAnnotationsItemOutage $outage,
		public \DateTimeImmutable $startDate,
		public ?string $description = null,
		public ?\DateTimeImmutable $endDate = null,
		public ?string $linkedUrl = null,
		public ?string $scope = null,
	) {
	}
}
