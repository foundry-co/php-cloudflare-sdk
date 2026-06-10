<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A break down of requests served over HTTPS.
 */
readonly class ZoneAnalyticsDeprecatedGetDashboardTimeseriesItemRequestsSsl
{
	public function __construct(
		/** The number of requests served over HTTPS. */
		public ?int $encrypted = null,
		/** The number of requests served over HTTP. */
		public ?int $unencrypted = null,
	) {
	}
}
