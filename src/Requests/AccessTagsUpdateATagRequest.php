<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a tag
 */
readonly class AccessTagsUpdateATagRequest
{
	public function __construct(
		/** The name of the tag */
		public string $name,
		public mixed $createdAt = null,
		public mixed $updatedAt = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'created_at' => $this->createdAt,
		    'updated_at' => $this->updatedAt,
		], fn ($v) => $v !== null);
	}
}
