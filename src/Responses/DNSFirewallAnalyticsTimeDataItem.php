<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DNSFirewallAnalyticsTimeDataItem
{
	public function __construct(
		/** Array with one item per requested metric. Each item is an array of values, broken down by time interval. */
		public array $metrics,
	) {
	}
}
