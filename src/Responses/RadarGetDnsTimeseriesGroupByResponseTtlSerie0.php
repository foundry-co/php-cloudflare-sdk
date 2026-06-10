<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetDnsTimeseriesGroupByResponseTtlSerie0
{
	public function __construct(
		public ?array $gt15mLte1h = null,
		public ?array $gt1dLte1w = null,
		public ?array $gt1hLte1d = null,
		public ?array $gt1mLte5m = null,
		public ?array $gt1w = null,
		public ?array $gt5mLte15m = null,
		public ?array $lte1m = null,
	) {
	}
}
