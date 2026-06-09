<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ListsLists
{
	public function __construct(
		/** The RFC 3339 timestamp of when the list was created. */
		public string $createdOn,
		/** The unique ID of the list. */
		public string $id,
		/** The type of the list. Each type supports specific list items (IP addresses, ASNs, hostnames or redirects). */
		public \FoundryCo\Cloudflare\Enums\ListsListsKind $kind,
		/** The RFC 3339 timestamp of when the list was last modified. */
		public string $modifiedOn,
		/** An informative name for the list. Use this name in filter and rule expressions. */
		public string $name,
		/** The number of items in the list. */
		public float $numItems,
		/** The number of [filters](/api/resources/filters/) referencing the list. */
		public float $numReferencingFilters,
		/** An informative summary of the list. */
		public ?string $description = null,
	) {
	}
}
