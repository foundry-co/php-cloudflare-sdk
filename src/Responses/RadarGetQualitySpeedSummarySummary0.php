<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetQualitySpeedSummarySummary0
{
	public function __construct(
		public ?string $bandwidthDownload = null,
		public ?string $bandwidthUpload = null,
		public ?string $jitterIdle = null,
		public ?string $jitterLoaded = null,
		public ?string $latencyIdle = null,
		public ?string $latencyLoaded = null,
		public ?string $packetLoss = null,
	) {
	}
}
