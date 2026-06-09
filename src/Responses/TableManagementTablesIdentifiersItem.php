<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specifies a unique table identifier within a catalog.
 */
readonly class TableManagementTablesIdentifiersItem
{
	public function __construct(
		/** Specifies the table name. */
		public string $name,
		/**
		 * Specifies the hierarchical namespace parts as an array of strings.
		 * For example, ["bronze", "analytics"] represents the namespace "bronze.analytics".
		 */
		public array $namespace,
	) {
	}
}
