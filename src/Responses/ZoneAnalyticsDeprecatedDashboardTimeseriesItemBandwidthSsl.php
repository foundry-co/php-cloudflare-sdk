<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A break down of bytes served over HTTPS.
 */
readonly class ZoneAnalyticsDeprecatedDashboardTimeseriesItemBandwidthSsl
{
	public function __construct(
		/** The number of bytes served over HTTPS. */
		public ?int $encrypted = null,
		/** The number of bytes served over HTTP. */
		public ?int $unencrypted = null,
	) {
	}
}
