<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PatchCollectionUpdate
{
	public function __construct(
		public ?string $createdAt = null,
		public ?string $createdBy = null,
		public ?string $id = null,
		public ?float $itemCount = null,
		public ?string $name = null,
		public ?string $status = null,
		public ?string $updatedAt = null,
		public ?array $metadata = null,
	) {
	}
}
