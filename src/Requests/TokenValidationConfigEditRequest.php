<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Edit an existing Token Configuration
 */
readonly class TokenValidationConfigEditRequest
{
	public function __construct(
		public ?string $description = null,
		public ?string $title = null,
		public ?array $tokenSources = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		    'title' => $this->title,
		    'token_sources' => $this->tokenSources,
		], fn ($v) => $v !== null);
	}
}
