<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetAnnotationsOutagesAnnotationsItem
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
		public ?RadarGetAnnotationsOutagesAnnotationsItemOutage $outage = null,
		public ?\DateTimeImmutable $startDate = null,
		public ?string $description = null,
		public ?\DateTimeImmutable $endDate = null,
		public ?string $linkedUrl = null,
		public ?string $scope = null,
	) {
	}
}
