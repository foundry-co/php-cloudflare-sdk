<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Search items (advanced filtering)
 */
readonly class PostItemSearchRequest
{
	public function __construct(
		public ?string $cursor = null,
		/** Recursive filter supporting AND/OR nesting of conditions. Can be either a leaf condition (field/op/value) or a logical group (and/or array of nested filters). */
		public mixed $filter = null,
		public ?int $limit = null,
		public ?\FoundryCo\Cloudflare\Responses\PostItemSearchRequestSort $sort = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'cursor' => $this->cursor,
		    'filter' => $this->filter,
		    'limit' => $this->limit,
		    'sort' => $this->sort?->toArray(),
		], fn ($v) => $v !== null);
	}
}
