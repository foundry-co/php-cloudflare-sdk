<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostEventCreateBulkRequestDataItem
{
	public function __construct(
		public string $category,
		public \DateTimeImmutable $date,
		public string $event,
		public PostEventCreateBulkRequestDataItemRaw $raw,
		public string $tlp,
		public ?float $accountId = null,
		public ?string $attacker = null,
		public ?string $attackerCountry = null,
		public ?string $datasetId = null,
		public ?string $indicator = null,
		public ?string $indicatorType = null,
		/** Array of indicators for this event. Supports multiple indicators per event for complex scenarios. */
		public ?array $indicators = null,
		public ?string $insight = null,
		public ?array $tags = null,
		public ?string $targetCountry = null,
		public ?string $targetIndustry = null,
	) {
	}
}
