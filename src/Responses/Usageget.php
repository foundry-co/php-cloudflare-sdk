<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class Usageget
{
	public function __construct(
		/** Event counts grouped by dataset and service, bucketed by day. */
		public ?array $breakdown = null,
		/** Total ABR-adjusted event count for the period — sum of all breakdown bins. */
		public ?float $events = null,
	) {
	}
}
