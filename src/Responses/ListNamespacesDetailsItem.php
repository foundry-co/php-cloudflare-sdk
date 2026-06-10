<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Contains namespace with metadata details.
 */
readonly class ListNamespacesDetailsItem
{
	public function __construct(
		/**
		 * Specifies the hierarchical namespace parts as an array of strings.
		 * For example, ["bronze", "analytics"] represents the namespace "bronze.analytics".
		 */
		public ?array $namespace = null,
		/** Contains the UUID that persists across renames. */
		public ?string $namespaceUuid = null,
		/** Indicates the creation timestamp in ISO 8601 format. */
		public ?\DateTimeImmutable $createdAt = null,
		/** Shows the last update timestamp in ISO 8601 format. Null if never updated. */
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
