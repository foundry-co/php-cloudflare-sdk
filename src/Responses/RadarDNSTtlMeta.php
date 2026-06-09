<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Metadata for the results.
 */
readonly class RadarDNSTtlMeta
{
	public function __construct(
		public RadarDNSTtlMetaConfidenceInfo $confidenceInfo,
		public array $dateRange,
		/** Timestamp of the last dataset update. */
		public \DateTimeImmutable $lastUpdated,
		/** Normalization method applied to the results. Refer to [Normalization methods](https://developers.cloudflare.com/radar/concepts/normalization/). */
		public \FoundryCo\Cloudflare\Enums\RadarDNSTtlMetaNormalization $normalization,
		/** Measurement units for the results. */
		public array $units,
	) {
	}
}
