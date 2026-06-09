<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AISearchTokensTokens
{
	public function __construct(
		public string $cfApiId,
		public \DateTimeImmutable $createdAt,
		public string $id,
		public \DateTimeImmutable $modifiedAt,
		public string $name,
		public ?string $createdBy = null,
		public ?bool $enabled = null,
		public ?bool $legacy = null,
		public ?string $modifiedBy = null,
	) {
	}
}
