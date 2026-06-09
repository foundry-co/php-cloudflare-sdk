<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UsageUsagegetBreakdownItem
{
	public function __construct(
		/** ISO-8601 timestamp for the start of the bucket. */
		public string $bin,
		/** ABR-adjusted event count for this bucket. */
		public float $count,
		/** Dataset name (e.g. 'workers', 'queues'). */
		public string $dataset,
		/** Worker or service name that produced the events. */
		public string $service,
	) {
	}
}
