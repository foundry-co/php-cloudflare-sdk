<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Contains the list of tables with optional pagination.
 */
readonly class TableManagementTables
{
	public function __construct(
		/** Lists tables in the namespace. */
		public array $identifiers,
		/**
		 * Contains detailed metadata for each table when return_details is true.
		 * Each object includes identifier, UUID, timestamps, and locations.
		 */
		public ?array $details = null,
		/**
		 * Use this opaque token to fetch the next page of results.
		 * A null or absent value indicates the last page.
		 */
		public ?string $nextPageToken = null,
		/**
		 * Contains UUIDs for each table when return_uuids is true.
		 * The order corresponds to the identifiers array.
		 */
		public ?array $tableUuids = null,
	) {
	}
}
