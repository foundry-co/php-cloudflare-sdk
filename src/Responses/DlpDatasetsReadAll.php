<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DlpDatasetsReadAll
{
	public function __construct(
		public ?array $columns = null,
		public ?\DateTimeImmutable $createdAt = null,
		public ?int $encodingVersion = null,
		public ?string $id = null,
		public ?string $name = null,
		public ?int $numCells = null,
		public ?bool $secret = null,
		public ?\FoundryCo\Cloudflare\Enums\DlpDatasetsReadAllStatus $status = null,
		/**
		 * Stores when the dataset was last updated.
		 *
		 * This includes name or description changes as well as uploads.
		 */
		public ?\DateTimeImmutable $updatedAt = null,
		public ?array $uploads = null,
		public ?bool $caseSensitive = null,
		/** The description of the dataset. */
		public ?string $description = null,
	) {
	}
}
