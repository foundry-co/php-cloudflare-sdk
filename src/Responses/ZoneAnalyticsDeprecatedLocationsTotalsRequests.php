<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Breakdown of totals for requests.
 */
readonly class ZoneAnalyticsDeprecatedLocationsTotalsRequests
{
	public function __construct(
		/** Total number of requests served. */
		public ?int $all = null,
		/** Total number of cached requests served. */
		public ?int $cached = null,
		/** Key/value pairs where the key is a two-digit country code and the value is the number of requests served to that country. */
		public ?array $country = null,
		/** A variable list of key/value pairs where the key is a HTTP status code and the value is the number of requests with that code served. */
		public ?array $httpStatus = null,
		/** Total number of requests served from the origin. */
		public ?int $uncached = null,
	) {
	}
}
