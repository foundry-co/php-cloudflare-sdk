<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CategoryGetCategories
{
	public function __construct(
		/** Returns the category creation time. */
		public string $createdAt,
		/** Returns the category description. */
		public string $description,
		/** Returns the category ID. */
		public string $id,
		/** Returns the category name. */
		public string $name,
	) {
	}
}
