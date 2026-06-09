<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DLPDatasetsAll
{
	public function __construct(
		public array $columns,
		public \DateTimeImmutable $createdAt,
		public int $encodingVersion,
		public string $id,
		public string $name,
		public int $numCells,
		public bool $secret,
		public \FoundryCo\Cloudflare\Enums\DLPDatasetsAllStatus $status,
		/**
		 * Stores when the dataset was last updated.
		 *
		 * This includes name or description changes as well as uploads.
		 */
		public \DateTimeImmutable $updatedAt,
		public array $uploads,
		public ?bool $caseSensitive = null,
		/** The description of the dataset. */
		public ?string $description = null,
	) {
	}
}
