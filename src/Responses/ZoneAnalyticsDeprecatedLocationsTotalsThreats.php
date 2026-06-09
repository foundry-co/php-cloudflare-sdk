<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Breakdown of totals for threats.
 */
readonly class ZoneAnalyticsDeprecatedLocationsTotalsThreats
{
	public function __construct(
		/** The total number of identifiable threats received over the time frame. */
		public ?int $all = null,
		/** A list of key/value pairs where the key is a two-digit country code and the value is the number of malicious requests received from that country. */
		public ?array $country = null,
		/** The list of key/value pairs where the key is a threat category and the value is the number of requests. */
		public ?array $type = null,
	) {
	}
}
