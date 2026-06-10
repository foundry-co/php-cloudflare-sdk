<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ListsGetAList
{
	public function __construct(
		/** The RFC 3339 timestamp of when the list was created. */
		public ?string $createdOn = null,
		/** The unique ID of the list. */
		public ?string $id = null,
		/** The type of the list. Each type supports specific list items (IP addresses, ASNs, hostnames or redirects). */
		public ?\FoundryCo\Cloudflare\Enums\ListsGetAListKind $kind = null,
		/** The RFC 3339 timestamp of when the list was last modified. */
		public ?string $modifiedOn = null,
		/** An informative name for the list. Use this name in filter and rule expressions. */
		public ?string $name = null,
		/** The number of items in the list. */
		public ?float $numItems = null,
		/** The number of [filters](/api/resources/filters/) referencing the list. */
		public ?float $numReferencingFilters = null,
		/** An informative summary of the list. */
		public ?string $description = null,
	) {
	}
}
