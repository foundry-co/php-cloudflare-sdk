<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostCollectionCreate
{
	public function __construct(
		public ?array $columns = null,
		public ?\DateTimeImmutable $createdAt = null,
		public ?string $createdBy = null,
		public ?string $id = null,
		public ?int $itemCount = null,
		public ?string $name = null,
		public ?\FoundryCo\Cloudflare\Enums\PostCollectionCreateStatus $status = null,
		public ?\DateTimeImmutable $updatedAt = null,
		public ?string $description = null,
		public ?string $projectId = null,
		public ?array $tags = null,
	) {
	}
}
