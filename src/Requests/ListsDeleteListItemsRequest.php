<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Delete list items
 */
readonly class ListsDeleteListItemsRequest
{
	public function __construct(
		public ?array $items = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'items' => $this->items,
		], fn ($v) => $v !== null);
	}
}
