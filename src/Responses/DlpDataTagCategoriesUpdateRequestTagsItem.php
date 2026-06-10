<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DlpDataTagCategoriesUpdateRequestTagsItem
{
	public function __construct(
		public ?string $description = null,
		public ?string $name = null,
		/**
		 * If `None` (omitted), a new tag will be created. Otherwise, an existing tag will be
		 * updated.
		 */
		public ?string $id = null,
	) {
	}
}
