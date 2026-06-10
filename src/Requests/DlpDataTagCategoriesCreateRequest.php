<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Creates a new data tag category.
 */
readonly class DlpDataTagCategoriesCreateRequest
{
	public function __construct(
		public string $name,
		public ?string $description = null,
		/** Tags to create with the category. Mutually exclusive with `template_id`. */
		public ?array $tags = null,
		public ?string $templateId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'description' => $this->description,
		    'tags' => $this->tags,
		    'template_id' => $this->templateId,
		], fn ($v) => $v !== null);
	}
}
