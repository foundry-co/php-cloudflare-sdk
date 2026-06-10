<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CustomIndicatorFeedsCreateProvider
{
	public function __construct(
		/**
		 * The numeric account ID the provider was created for. Distinct from
		 * the path `account_id` parameter, which carries the account
		 * identifier string used for routing.
		 */
		public ?int $accountId = null,
		/** The name of the provider */
		public ?string $name = null,
		/** The unique identifier for the created provider */
		public ?int $providerId = null,
	) {
	}
}
