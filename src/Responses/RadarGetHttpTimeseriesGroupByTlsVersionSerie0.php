<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetHttpTimeseriesGroupByTlsVersionSerie0
{
	public function __construct(
		public ?array $tLS10 = null,
		public ?array $tLS11 = null,
		public ?array $tLS12 = null,
		public ?array $tLS13 = null,
		public ?array $tLSQUIC = null,
		public ?array $timestamps = null,
	) {
	}
}
