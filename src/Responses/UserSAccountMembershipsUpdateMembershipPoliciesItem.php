<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UserSAccountMembershipsUpdateMembershipPoliciesItem
{
	public function __construct(
		/** Allow or deny operations against the resources. */
		public ?\FoundryCo\Cloudflare\Enums\UserSAccountMembershipsUpdateMembershipPoliciesItemAccess $access = null,
		/** Policy identifier. */
		public ?string $id = null,
		/** A set of permission groups that are specified to the policy. */
		public ?array $permissionGroups = null,
		/** A list of resource groups that the policy applies to. */
		public ?array $resourceGroups = null,
	) {
	}
}
