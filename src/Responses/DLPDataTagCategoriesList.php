<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DLPDataTagCategoriesList
{
	public function __construct(
		public \DateTimeImmutable $createdAt,
		public string $id,
		public string $name,
		public array $tags,
		public \DateTimeImmutable $updatedAt,
		public ?string $description = null,
		public ?string $templateId = null,
	) {
	}
}
