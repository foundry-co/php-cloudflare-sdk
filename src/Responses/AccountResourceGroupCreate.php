<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A group of scoped resources.
 */
readonly class AccountResourceGroupCreate
{
	public function __construct(
		/** Identifier of the resource group. */
		public ?string $id = null,
		/** The scope associated to the resource group */
		public ?array $scope = null,
		/** Attributes associated to the resource group. */
		public ?AccountResourceGroupCreateMeta $meta = null,
		/** Name of the resource group. */
		public ?string $name = null,
	) {
	}
}
