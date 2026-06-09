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
readonly class ZoneAnalyticsDeprecatedDashboardTotalsBandwidth
{
	public function __construct(
		/** The total number of bytes served within the time frame. */
		public ?int $all = null,
		/** The number of bytes that were cached (and served) by Cloudflare. */
		public ?int $cached = null,
		/** A variable list of key/value pairs where the key represents the type of content served, and the value is the number in bytes served. */
		public ?array $contentType = null,
		/** A variable list of key/value pairs where the key is a two-digit country code and the value is the number of bytes served to that country. */
		public ?array $country = null,
		/** A break down of bytes served over HTTPS. */
		public ?ZoneAnalyticsDeprecatedDashboardTotalsBandwidthSsl $ssl = null,
		/** A breakdown of requests by their SSL protocol. */
		public ?ZoneAnalyticsDeprecatedDashboardTotalsBandwidthSslProtocols $sslProtocols = null,
		/** The number of bytes that were fetched and served from the origin server. */
		public ?int $uncached = null,
	) {
	}
}
