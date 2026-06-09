<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A group of scoped resources.
 */
readonly class AccountUserGroupsCreatePoliciesItemResourceGroupsItem
{
	public function __construct(
		/** Identifier of the resource group. */
		public string $id,
		/** The scope associated to the resource group */
		public array $scope,
		/** Attributes associated to the resource group. */
		public ?AccountUserGroupsCreatePoliciesItemResourceGroupsItemMeta $meta = null,
		/** Name of the resource group. */
		public ?string $name = null,
	) {
	}
}
