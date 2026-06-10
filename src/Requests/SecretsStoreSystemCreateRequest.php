<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a store (System)
 */
readonly class SecretsStoreSystemCreateRequest
{
	public function __construct(
		/**
		 * Account internal ID (numeric). Required for system API routes.
		 * This value must remain consistent for all stores within an account
		 * managed by the same service.
		 */
		public int $accountId,
		/** The name of the store */
		public string $name,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'account_id' => $this->accountId,
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
