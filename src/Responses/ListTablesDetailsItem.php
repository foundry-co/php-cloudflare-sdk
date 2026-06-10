<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Contains table with metadata.
 */
readonly class ListTablesDetailsItem
{
	public function __construct(
		/** Specifies a unique table identifier within a catalog. */
		public ?ListTablesDetailsItemIdentifier $identifier = null,
		/** Contains the UUID that persists across renames. */
		public ?string $tableUuid = null,
		/** Indicates the creation timestamp in ISO 8601 format. */
		public ?\DateTimeImmutable $createdAt = null,
		/** Specifies the base S3 URI for table storage location. */
		public ?string $location = null,
		/** Contains the S3 URI to table metadata file. Null for staged tables. */
		public ?string $metadataLocation = null,
		/** Shows the last update timestamp in ISO 8601 format. Null if never updated. */
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
