<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DNSFirewallAnalyticsTableQuery
{
	public function __construct(
		/** Array of dimension names. */
		public array $dimensions,
		public array $limit,
		/** Array of metric names. */
		public array $metrics,
		public array $since,
		public array $until,
		public ?array $filters = null,
		/** Array of dimensions to sort by, where each dimension may be prefixed by - (descending) or + (ascending). */
		public ?array $sort = null,
	) {
	}
}
