<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CollectionsCollectionCreate
{
	public function __construct(
		public array $columns,
		public \DateTimeImmutable $createdAt,
		public string $createdBy,
		public string $id,
		public int $itemCount,
		public string $name,
		public \FoundryCo\Cloudflare\Enums\CollectionsCollectionCreateStatus $status,
		public \DateTimeImmutable $updatedAt,
		public ?string $description = null,
		public ?string $projectId = null,
		public ?array $tags = null,
	) {
	}
}
