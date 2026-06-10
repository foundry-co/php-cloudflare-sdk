<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetHttpTimeseriesGroupByDeviceTypeSerie0
{
	public function __construct(
		public ?array $desktop = null,
		public ?array $mobile = null,
		public ?array $other = null,
		public ?array $timestamps = null,
	) {
	}
}
