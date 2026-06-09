<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UsageUsageget
{
	public function __construct(
		/** Event counts grouped by dataset and service, bucketed by day. */
		public array $breakdown,
		/** Total ABR-adjusted event count for the period — sum of all breakdown bins. */
		public float $events,
	) {
	}
}
