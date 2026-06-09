<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create indicator feed provider
 */
readonly class CustomIndicatorFeedsCreateProviderRequest
{
	public function __construct(
		/**
		 * The numeric account ID to create the provider for. Distinct from the
		 * path `account_id` parameter, which carries the account identifier
		 * string used for routing.
		 */
		public int $accountId,
		/** The name of the provider */
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
