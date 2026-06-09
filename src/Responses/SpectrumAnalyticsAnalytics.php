<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SpectrumAnalyticsAnalytics
{
	public function __construct(
		public mixed $appID,
		/** Number of bytes sent */
		public float $bytesEgress,
		/** Number of bytes received */
		public float $bytesIngress,
		/** Number of connections */
		public float $connections,
		/** Average duration of connections */
		public float $durationAvg,
	) {
	}
}
