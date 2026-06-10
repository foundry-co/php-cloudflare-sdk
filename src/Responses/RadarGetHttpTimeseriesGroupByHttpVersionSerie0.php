<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetHttpTimeseriesGroupByHttpVersionSerie0
{
	public function __construct(
		public ?array $hTTP1x = null,
		public ?array $hTTP2 = null,
		public ?array $hTTP3 = null,
		public ?array $timestamps = null,
	) {
	}
}
