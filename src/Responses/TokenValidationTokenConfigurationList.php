<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TokenValidationTokenConfigurationList
{
	public function __construct(
		public mixed $createdAt,
		public TokenValidationTokenConfigurationListCredentials $credentials,
		public string $description,
		public mixed $id,
		public mixed $lastUpdated,
		public string $title,
		public array $tokenSources,
		public \FoundryCo\Cloudflare\Enums\TokenValidationTokenConfigurationListTokenType $tokenType,
	) {
	}
}
