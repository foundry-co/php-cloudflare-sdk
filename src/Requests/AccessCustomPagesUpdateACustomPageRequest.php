<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a custom page
 */
readonly class AccessCustomPagesUpdateACustomPageRequest
{
	public function __construct(
		/** Custom page HTML. */
		public string $customHtml,
		/** Custom page name. */
		public string $name,
		/** Custom page type. */
		public \FoundryCo\Cloudflare\Enums\AccessCustomPagesUpdateACustomPageRequestType $type,
		/** Number of apps the custom page is assigned to. */
		public ?int $appCount = null,
		public mixed $createdAt = null,
		/** UUID. */
		public ?string $uid = null,
		public mixed $updatedAt = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'custom_html' => $this->customHtml,
		    'name' => $this->name,
		    'type' => $this->type->value,
		    'app_count' => $this->appCount,
		    'created_at' => $this->createdAt,
		    'uid' => $this->uid,
		    'updated_at' => $this->updatedAt,
		], fn ($v) => $v !== null);
	}
}
