<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SpectrumAggregateAnalyticsGetCurrentAggregatedAnalytics
{
	public function __construct(
		public mixed $appID = null,
		/** Number of bytes sent */
		public ?float $bytesEgress = null,
		/** Number of bytes received */
		public ?float $bytesIngress = null,
		/** Number of connections */
		public ?float $connections = null,
		/** Average duration of connections */
		public ?float $durationAvg = null,
	) {
	}
}
