<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DexEndpointsHttpTestDetailsHttpStatsResourceFetchTimeMs
{
	public function __construct(
		public ?array $slots = null,
		/** average observed in the time period */
		public ?int $avg = null,
		/** highest observed in the time period */
		public ?int $max = null,
		/** lowest observed in the time period */
		public ?int $min = null,
	) {
	}
}
