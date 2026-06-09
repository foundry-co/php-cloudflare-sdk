<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class LogExplorerDatasetsGet
{
	public function __construct(
		/** RFC3339 timestamp recording when the API created this dataset. */
		public \DateTimeImmutable $createdAt,
		/** Dataset type name (e.g. `http_requests`). */
		public string $dataset,
		/** Unique dataset ID. */
		public string $datasetId,
		/** Whether log ingest is currently active for this dataset. */
		public bool $enabled,
		/** Public ID of the account or zone that owns this dataset. */
		public string $objectId,
		/** Whether this dataset belongs to an account or a zone. */
		public \FoundryCo\Cloudflare\Enums\LogExplorerDatasetsGetObjectType $objectType,
		/** RFC3339 timestamp recording when the API last updated this dataset. */
		public \DateTimeImmutable $updatedAt,
		/**
		 * The field configuration for this dataset.
		 */
		public ?array $fields = null,
	) {
	}
}
