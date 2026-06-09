<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A scope is a combination of scope objects which provides additional context.
 */
readonly class AccountResourceGroupsUpdateScopeItem
{
	public function __construct(
		/** This is a combination of pre-defined resource name and identifier (like Account ID etc.) */
		public array $key,
		/** A list of scope objects for additional context. */
		public array $objects,
	) {
	}
}
