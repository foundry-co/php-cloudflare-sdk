<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UsagegetBreakdownItem
{
	public function __construct(
		/** ISO-8601 timestamp for the start of the bucket. */
		public ?string $bin = null,
		/** ABR-adjusted event count for this bucket. */
		public ?float $count = null,
		/** Dataset name (e.g. 'workers', 'queues'). */
		public ?string $dataset = null,
		/** Worker or service name that produced the events. */
		public ?string $service = null,
	) {
	}
}
