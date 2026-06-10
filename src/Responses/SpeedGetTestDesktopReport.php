<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The Lighthouse report.
 */
readonly class SpeedGetTestDesktopReport
{
	public function __construct(
		/** Cumulative Layout Shift. */
		public ?float $cls = null,
		/** The type of device. */
		public ?\FoundryCo\Cloudflare\Enums\SpeedGetTestDesktopReportDeviceType $deviceType = null,
		public ?SpeedGetTestDesktopReportError $error = null,
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
		/** The state of the Lighthouse report. */
		public ?\FoundryCo\Cloudflare\Enums\SpeedGetTestDesktopReportState $state = null,
		/** Total Blocking Time. */
		public ?float $tbt = null,
		/** Time To First Byte. */
		public ?float $ttfb = null,
		/** Time To Interactive. */
		public ?float $tti = null,
	) {
	}
}
