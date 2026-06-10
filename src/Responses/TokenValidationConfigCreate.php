<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TokenValidationConfigCreate
{
	public function __construct(
		public mixed $createdAt = null,
		public ?TokenValidationConfigCreateCredentials $credentials = null,
		public ?string $description = null,
		public mixed $id = null,
		public mixed $lastUpdated = null,
		public ?string $title = null,
		public ?array $tokenSources = null,
		public ?\FoundryCo\Cloudflare\Enums\TokenValidationConfigCreateTokenType $tokenType = null,
	) {
	}
}
