<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccountUserGroupCreateRequestPoliciesItem
{
	public function __construct(
		/** Allow or deny operations against the resources. */
		public ?\FoundryCo\Cloudflare\Enums\AccountUserGroupCreateRequestPoliciesItemAccess $access = null,
		/** A set of permission groups that are specified to the policy. */
		public ?array $permissionGroups = null,
		/** A set of resource groups that are specified to the policy. */
		public ?array $resourceGroups = null,
	) {
	}
}
