<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessCustomPagesGetACustomPage
{
	public function __construct(
		/** Custom page HTML. */
		public ?string $customHtml = null,
		/** Custom page name. */
		public ?string $name = null,
		/** Custom page type. */
		public ?\FoundryCo\Cloudflare\Enums\AccessCustomPagesGetACustomPageType $type = null,
		/** Number of apps the custom page is assigned to. */
		public ?int $appCount = null,
		public mixed $createdAt = null,
		/** UUID. */
		public ?string $uid = null,
		public mixed $updatedAt = null,
	) {
	}
}
