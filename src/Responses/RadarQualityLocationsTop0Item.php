<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarQualityLocationsTop0Item
{
	public function __construct(
		public string $bandwidthDownload,
		public string $bandwidthUpload,
		public string $clientCountryAlpha2,
		public string $clientCountryName,
		public string $jitterIdle,
		public string $jitterLoaded,
		public string $latencyIdle,
		public string $latencyLoaded,
		public float $numTests,
		public float $rankPower,
	) {
	}
}
