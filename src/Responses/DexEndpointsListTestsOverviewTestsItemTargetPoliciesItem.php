<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DexEndpointsListTestsOverviewTestsItemTargetPoliciesItem
{
	public function __construct(
		/** Whether the policy is the default for the account */
		public ?bool $default = null,
		/** API Resource UUID tag. */
		public ?string $id = null,
		public ?string $name = null,
	) {
	}
}
