<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AISearchInstancesItemsItem
{
	public function __construct(
		public string $checksum,
		public int $chunksCount,
		public \DateTimeImmutable $createdAt,
		public float $fileSize,
		public string $id,
		public string $key,
		public \DateTimeImmutable $lastSeenAt,
		public string $namespace,
		public \FoundryCo\Cloudflare\Enums\AISearchInstancesItemsItemNextAction $nextAction,
		/** Identifies which data source this item belongs to. "builtin" for uploaded files, "{type}:{source}" for external sources, null for legacy items. */
		public string $sourceId,
		public \FoundryCo\Cloudflare\Enums\AISearchInstancesItemsItemStatus $status,
		public ?string $error = null,
	) {
	}
}
