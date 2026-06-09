<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The Lighthouse report.
 */
readonly class ObservatoryPagesTestsItemMobileReport
{
	public function __construct(
		/** Cumulative Layout Shift. */
		public ?float $cls = null,
		public ?array $deviceType = null,
		public ?ObservatoryPagesTestsItemMobileReportError $error = null,
		/** First Contentful Paint. */
		public ?float $fcp = null,
		/** The URL to the full Lighthouse JSON report. */
		public ?string $jsonReportUrl = null,
		/** Largest Contentful Paint. */
		public ?float $lcp = null,
		/** The Lighthouse performance score. */
		public ?float $performanceScore = null,
		/** Speed Index. */
		public ?float $si = null,
		public ?array $state = null,
		/** Total Blocking Time. */
		public ?float $tbt = null,
		/** Time To First Byte. */
		public ?float $ttfb = null,
		/** Time To Interactive. */
		public ?float $tti = null,
	) {
	}
}
