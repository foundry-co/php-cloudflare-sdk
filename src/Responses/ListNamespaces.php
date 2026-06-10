<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Contains the list of namespaces with optional pagination.
 */
readonly class ListNamespaces
{
	public function __construct(
		/** Lists namespaces in the catalog. */
		public ?array $namespaces = null,
		/**
		 * Contains detailed metadata for each namespace when return_details is true.
		 * Each object includes the namespace, UUID, and timestamps.
		 */
		public ?array $details = null,
		/**
		 * Contains UUIDs for each namespace when return_uuids is true.
		 * The order corresponds to the namespaces array.
		 */
		public ?array $namespaceUuids = null,
		/**
		 * Use this opaque token to fetch the next page of results.
		 * A null or absent value indicates the last page.
		 */
		public ?string $nextPageToken = null,
	) {
	}
}
