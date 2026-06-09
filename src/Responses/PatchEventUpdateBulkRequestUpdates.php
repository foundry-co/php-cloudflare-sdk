<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Fields to update on all specified events. All fields including 'insight' are supported, except 'date' which requires shard migration.
 */
readonly class PatchEventUpdateBulkRequestUpdates
{
	public function __construct(
		public ?string $attacker = null,
		public ?string $attackerCountry = null,
		public ?string $category = null,
		public ?\DateTimeImmutable $createdAt = null,
		public ?string $event = null,
		public ?string $indicator = null,
		public ?string $indicatorType = null,
		public ?string $insight = null,
		public ?PatchEventUpdateBulkRequestUpdatesRaw $raw = null,
		public ?string $targetCountry = null,
		public ?string $targetIndustry = null,
		public ?string $tlp = null,
	) {
	}
}
