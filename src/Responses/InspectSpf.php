<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Recursive SPF inspection tree (spflimit-worker format).
 *
 * Breaking change from previous format:
 * - `raw` renamed to `record`
 * - `num_lookups` renamed to `total_lookups`
 * - `mechanisms` renamed to `components` with new structure
 * - `child` array removed; nested trees now in `components[].nested`
 * - `errors` is now an array of error objects (was single string)
 */
readonly class InspectSpf
{
	public function __construct(
		/** Parsed SPF components (mechanisms) */
		public ?array $components = null,
		/** Domain being inspected */
		public ?string $domain = null,
		/** Raw SPF record content */
		public ?string $record = null,
		/** Total number of DNS lookups performed across all includes */
		public ?int $totalLookups = null,
	) {
	}
}
