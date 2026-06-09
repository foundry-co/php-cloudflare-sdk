<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DEXRulesRulesRulesItem
{
	public function __construct(
		public string $createdAt,
		/** API Resource UUID tag. */
		public string $id,
		public string $match,
		public string $name,
		public ?string $description = null,
		public ?array $targetedTests = null,
		public ?string $updatedAt = null,
	) {
	}
}
