<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Metadata for the results.
 */
readonly class RadarGetHttpSummaryByPostQuantumMeta
{
	public function __construct(
		public ?RadarGetHttpSummaryByPostQuantumMetaConfidenceInfo $confidenceInfo = null,
		public ?array $dateRange = null,
		/** Timestamp of the last dataset update. */
		public ?\DateTimeImmutable $lastUpdated = null,
		/** Normalization method applied to the results. Refer to [Normalization methods](https://developers.cloudflare.com/radar/concepts/normalization/). */
		public ?\FoundryCo\Cloudflare\Enums\RadarGetHttpSummaryByPostQuantumMetaNormalization $normalization = null,
		/** Measurement units for the results. */
		public ?array $units = null,
	) {
	}
}
