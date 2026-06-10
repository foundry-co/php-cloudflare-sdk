<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetAgentReadinessSummaryMeta
{
	public function __construct(
		/** Date of the returned scan (YYYY-MM-DD). May differ from the requested date if no scan exists for that exact date. */
		public ?string $date = null,
		/** Available domain sub-categories with their scan counts. Use as filter options for the domainCategory parameter. */
		public ?array $domainCategories = null,
		/** Timestamp of the last dataset update. */
		public ?\DateTimeImmutable $lastUpdated = null,
		/** Normalization method applied to the results. Refer to [Normalization methods](https://developers.cloudflare.com/radar/concepts/normalization/). */
		public ?\FoundryCo\Cloudflare\Enums\RadarGetAgentReadinessSummaryMetaNormalization $normalization = null,
		/** Domains successfully scanned (excludes errors). */
		public ?int $successfulDomains = null,
		/** Total domains attempted in the scan. */
		public ?int $totalDomains = null,
		/** Measurement units for the results. */
		public ?array $units = null,
	) {
	}
}
