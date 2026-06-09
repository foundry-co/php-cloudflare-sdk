<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Breakdown of totals for bandwidth in the form of bytes.
 */
readonly class ZoneAnalyticsDeprecatedLocationsTotalsBandwidth
{
	public function __construct(
		/** The total number of bytes served within the time frame. */
		public ?int $all = null,
		/** The number of bytes that were cached (and served) by Cloudflare. */
		public ?int $cached = null,
		/** The number of bytes that were fetched and served from the origin server. */
		public ?int $uncached = null,
	) {
	}
}
