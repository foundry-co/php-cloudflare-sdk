<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UserApiTokensUpdateTokenRequestPoliciesItem
{
	public function __construct(
		/** Allow or deny operations against the resources. */
		public \FoundryCo\Cloudflare\Enums\UserApiTokensUpdateTokenRequestPoliciesItemEffect $effect,
		/** Policy identifier. */
		public string $id,
		/** A set of permission groups that are specified to the policy. */
		public array $permissionGroups,
		/** A list of resource names that the policy applies to. */
		public mixed $resources,
	) {
	}
}
