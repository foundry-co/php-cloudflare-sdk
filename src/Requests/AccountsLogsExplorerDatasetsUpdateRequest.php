<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update an account dataset
 */
readonly class AccountsLogsExplorerDatasetsUpdateRequest
{
	public function __construct(
		/** Whether to enable or disable log ingest for this dataset. */
		public bool $enabled,
		/**
		 * Controls which fields the API ingests after the update. Defaults
		 * to all available fields when absent.
		 */
		public ?array $fields = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'enabled' => $this->enabled,
		    'fields' => $this->fields,
		], fn ($v) => $v !== null);
	}
}
