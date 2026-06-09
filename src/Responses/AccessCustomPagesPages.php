<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessCustomPagesPages
{
	public function __construct(
		/** Custom page name. */
		public string $name,
		/** Custom page type. */
		public \FoundryCo\Cloudflare\Enums\AccessCustomPagesPagesType $type,
		/** Number of apps the custom page is assigned to. */
		public ?int $appCount = null,
		public mixed $createdAt = null,
		/** UUID. */
		public ?string $uid = null,
		public mixed $updatedAt = null,
	) {
	}
}
