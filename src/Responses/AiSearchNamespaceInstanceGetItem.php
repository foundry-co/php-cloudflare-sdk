<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchNamespaceInstanceGetItem
{
	public function __construct(
		public ?string $checksum = null,
		public ?int $chunksCount = null,
		public ?\DateTimeImmutable $createdAt = null,
		public ?float $fileSize = null,
		public ?string $id = null,
		public ?string $key = null,
		public ?\DateTimeImmutable $lastSeenAt = null,
		public ?string $namespace = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceInstanceGetItemNextAction $nextAction = null,
		/** Identifies which data source this item belongs to. "builtin" for uploaded files, "{type}:{source}" for external sources, null for legacy items. */
		public ?string $sourceId = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceInstanceGetItemStatus $status = null,
		public ?string $error = null,
	) {
	}
}
