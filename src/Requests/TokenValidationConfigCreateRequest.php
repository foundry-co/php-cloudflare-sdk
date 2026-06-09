<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new Token Validation configuration
 */
readonly class TokenValidationConfigCreateRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Responses\TokenValidationConfigCreateRequestCredentials $credentials,
		public string $description,
		public string $title,
		public array $tokenSources,
		public \FoundryCo\Cloudflare\Enums\TokenValidationConfigCreateRequestTokenType $tokenType,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'credentials' => $this->credentials->toArray(),
		    'description' => $this->description,
		    'title' => $this->title,
		    'token_sources' => $this->tokenSources,
		    'token_type' => $this->tokenType->value,
		], fn ($v) => $v !== null);
	}
}
