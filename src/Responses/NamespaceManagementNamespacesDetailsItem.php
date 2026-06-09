<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Contains namespace with metadata details.
 */
readonly class NamespaceManagementNamespacesDetailsItem
{
	public function __construct(
		/**
		 * Specifies the hierarchical namespace parts as an array of strings.
		 * For example, ["bronze", "analytics"] represents the namespace "bronze.analytics".
		 */
		public array $namespace,
		/** Contains the UUID that persists across renames. */
		public string $namespaceUuid,
		/** Indicates the creation timestamp in ISO 8601 format. */
		public ?\DateTimeImmutable $createdAt = null,
		/** Shows the last update timestamp in ISO 8601 format. Null if never updated. */
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
