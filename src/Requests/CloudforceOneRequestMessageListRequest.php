<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * List Request Messages
 */
readonly class CloudforceOneRequestMessageListRequest
{
	public function __construct(
		/** Page number of results. */
		public int $page,
		/** Number of results per page. */
		public int $perPage,
		/** Retrieve mes  ges created after this time. */
		public mixed $after = null,
		/** Retrieve messages created before this time. */
		public mixed $before = null,
		/** Field to sort results by. */
		public ?string $sortBy = null,
		/** Sort order (asc or desc). */
		public ?\FoundryCo\Cloudflare\Enums\CloudforceOneRequestMessageListRequestSortOrder $sortOrder = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'page' => $this->page,
		    'per_page' => $this->perPage,
		    'after' => $this->after,
		    'before' => $this->before,
		    'sort_by' => $this->sortBy,
		    'sort_order' => $this->sortOrder?->value,
		], fn ($v) => $v !== null);
	}
}
