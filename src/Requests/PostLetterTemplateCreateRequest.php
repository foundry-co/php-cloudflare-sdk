<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create letter template
 */
readonly class PostLetterTemplateCreateRequest
{
	public function __construct(
		public string $body,
		public string $category,
		public string $name,
		public ?string $description = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'body' => $this->body,
		    'category' => $this->category,
		    'name' => $this->name,
		    'description' => $this->description,
		], fn ($v) => $v !== null);
	}
}
