<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Delete secrets
 */
readonly class SecretsStoreDeleteBulkRequest
{
	public function __construct(
		/** List of secret identifier tags to delete. */
		public array $ids,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'ids' => $this->ids,
		], fn ($v) => $v !== null);
	}
}
