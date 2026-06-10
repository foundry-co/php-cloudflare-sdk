<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetDexRule
{
	public function __construct(
		public ?string $createdAt = null,
		/** API Resource UUID tag. */
		public ?string $id = null,
		public ?string $match = null,
		public ?string $name = null,
		public ?string $description = null,
		public ?array $targetedTests = null,
		public ?string $updatedAt = null,
	) {
	}
}
