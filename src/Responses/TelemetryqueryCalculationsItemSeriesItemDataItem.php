<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TelemetryqueryCalculationsItemSeriesItemDataItem
{
	public function __construct(
		public ?float $count = null,
		public ?float $interval = null,
		public ?float $sampleInterval = null,
		public ?float $value = null,
		public ?string $firstSeen = null,
		public ?array $groups = null,
		public ?string $lastSeen = null,
	) {
	}
}
