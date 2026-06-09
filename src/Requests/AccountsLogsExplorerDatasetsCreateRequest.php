<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create an account dataset
 */
readonly class AccountsLogsExplorerDatasetsCreateRequest
{
	public function __construct(
		/** Dataset type name to create (e.g. `http_requests`). */
		public string $dataset,
		/**
		 * Controls which fields the API ingests. Defaults to all available
		 * fields when absent.
		 */
		public ?array $fields = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'dataset' => $this->dataset,
		    'fields' => $this->fields,
		], fn ($v) => $v !== null);
	}
}
