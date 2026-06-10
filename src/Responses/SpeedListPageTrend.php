<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SpeedListPageTrend
{
	public function __construct(
		/** Cumulative Layout Shift trend. */
		public ?array $cls = null,
		/** First Contentful Paint trend. */
		public ?array $fcp = null,
		/** Largest Contentful Paint trend. */
		public ?array $lcp = null,
		/** The Lighthouse score trend. */
		public ?array $performanceScore = null,
		/** Speed Index trend. */
		public ?array $si = null,
		/** Total Blocking Time trend. */
		public ?array $tbt = null,
		/** Time To First Byte trend. */
		public ?array $ttfb = null,
		/** Time To Interactive trend. */
		public ?array $tti = null,
	) {
	}
}
