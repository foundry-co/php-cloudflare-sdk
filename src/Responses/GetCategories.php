<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetCategories
{
	public function __construct(
		/** Returns the category creation time. */
		public ?string $createdAt = null,
		/** Returns the category description. */
		public ?string $description = null,
		/** Returns the category ID. */
		public ?string $id = null,
		/** Returns the category name. */
		public ?string $name = null,
	) {
	}
}
