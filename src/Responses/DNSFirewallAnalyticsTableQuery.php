<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DnsFirewallAnalyticsTableQuery
{
	public function __construct(
		/** Array of dimension names. */
		public ?array $dimensions = null,
		/** Limit number of returned metrics. */
		public ?int $limit = null,
		/** Array of metric names. */
		public ?array $metrics = null,
		/** Start date and time of requesting data period in ISO 8601 format. */
		public ?\DateTimeImmutable $since = null,
		/** End date and time of requesting data period in ISO 8601 format. */
		public ?\DateTimeImmutable $until = null,
		/** Segmentation filter in 'attribute operator value' format. */
		public ?string $filters = null,
		/** Array of dimensions to sort by, where each dimension may be prefixed by - (descending) or + (ascending). */
		public ?array $sort = null,
	) {
	}
}
