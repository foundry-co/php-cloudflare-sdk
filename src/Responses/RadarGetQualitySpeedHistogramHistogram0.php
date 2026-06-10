<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetQualitySpeedHistogramHistogram0
{
	public function __construct(
		public ?array $bandwidthDownload = null,
		public ?array $bandwidthUpload = null,
		public ?array $bucketMin = null,
	) {
	}
}
