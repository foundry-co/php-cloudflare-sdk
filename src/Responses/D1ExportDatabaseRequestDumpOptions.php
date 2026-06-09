<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class D1ExportDatabaseRequestDumpOptions
{
	public function __construct(
		/** Export only the table definitions, not their contents */
		public ?bool $noData = null,
		/** Export only each table's contents, not its definition */
		public ?bool $noSchema = null,
		/** Filter the export to just one or more tables. Passing an empty array is the same as not passing anything and means: export all tables. */
		public ?array $tables = null,
	) {
	}
}
