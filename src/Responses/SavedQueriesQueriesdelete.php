<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SavedQueriesQueriesdelete
{
	public function __construct(
		/** If the query wasn't explcitly saved */
		public bool $adhoc,
		public string $created,
		public string $createdBy,
		public string $description,
		public string $id,
		/** Query name */
		public string $name,
		public SavedQueriesQueriesdeleteParameters $parameters,
		public string $updated,
		public string $updatedBy,
	) {
	}
}
