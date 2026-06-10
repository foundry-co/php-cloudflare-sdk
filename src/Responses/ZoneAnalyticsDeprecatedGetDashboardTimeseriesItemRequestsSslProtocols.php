<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A breakdown of requests by their SSL protocol.
 */
readonly class ZoneAnalyticsDeprecatedGetDashboardTimeseriesItemRequestsSslProtocols
{
	public function __construct(
		/** The number of requests served over TLS v1.0. */
		public ?int $tLSv1 = null,
		/** The number of requests served over TLS v1.1. */
		public ?int $tLSv11 = null,
		/** The number of requests served over TLS v1.2. */
		public ?int $tLSv12 = null,
		/** The number of requests served over TLS v1.3. */
		public ?int $tLSv13 = null,
		/** The number of requests served over HTTP. */
		public ?int $none = null,
	) {
	}
}
