<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update the attributes of a single data tag category.
 */
readonly class DlpDataTagCategoriesUpdateRequest
{
	public function __construct(
		public ?string $description = null,
		public ?string $name = null,
		/**
		 * The desired final state of tags.
		 * - `None` (omitted): no tag changes.
		 * - `Some([])`: delete all tags.
		 * - `Some([...])`: desired final set + order.
		 */
		public ?array $tags = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		    'name' => $this->name,
		    'tags' => $this->tags,
		], fn ($v) => $v !== null);
	}
}
