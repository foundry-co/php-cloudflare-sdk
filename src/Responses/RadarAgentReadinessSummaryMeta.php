<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarAgentReadinessSummaryMeta
{
	public function __construct(
		/** Date of the returned scan (YYYY-MM-DD). May differ from the requested date if no scan exists for that exact date. */
		public string $date,
		/** Available domain sub-categories with their scan counts. Use as filter options for the domainCategory parameter. */
		public array $domainCategories,
		/** Timestamp of the last dataset update. */
		public \DateTimeImmutable $lastUpdated,
		/** Normalization method applied to the results. Refer to [Normalization methods](https://developers.cloudflare.com/radar/concepts/normalization/). */
		public \FoundryCo\Cloudflare\Enums\RadarAgentReadinessSummaryMetaNormalization $normalization,
		/** Domains successfully scanned (excludes errors). */
		public int $successfulDomains,
		/** Total domains attempted in the scan. */
		public int $totalDomains,
		/** Measurement units for the results. */
		public array $units,
	) {
	}
}
