<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create new saved string queries in bulk
 */
readonly class PostAccountsaccountIdBrandProtectionQueriesBulkRequest
{
	public function __construct(
		public ?array $queries = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'queries' => $this->queries,
		], fn ($v) => $v !== null);
	}
}
