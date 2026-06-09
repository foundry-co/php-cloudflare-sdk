<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update letter template
 */
readonly class PutLetterTemplateUpdateRequest
{
	public function __construct(
		public ?string $body = null,
		public ?string $category = null,
		public ?string $description = null,
		public ?string $name = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'body' => $this->body,
		    'category' => $this->category,
		    'description' => $this->description,
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
