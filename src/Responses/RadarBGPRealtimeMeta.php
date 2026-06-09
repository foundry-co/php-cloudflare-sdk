<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarBGPRealtimeMeta
{
	public function __construct(
		public array $asnInfo,
		public array $collectors,
		/** The most recent data timestamp for from the real-time sources. */
		public string $dataTime,
		public array $prefixOrigins,
		/** The timestamp of this query. */
		public string $queryTime,
	) {
	}
}
