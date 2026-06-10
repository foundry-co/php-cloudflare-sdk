<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostIndicatorCreateBulkRequestIndicatorsItem
{
	public function __construct(
		public ?string $indicatorType = null,
		public ?string $value = null,
		/** If true, automatically create the indicator type if it doesn't exist. If false (default), throw an error when the indicator type doesn't exist. */
		public ?bool $autoCreateType = null,
		public ?array $relatedEvents = null,
		public ?array $tags = null,
	) {
	}
}
