<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustGatewayCategoriesListCategoriesSubcategoriesItem
{
	public function __construct(
		/** Indicate whether the category is in beta and subject to change. */
		public ?bool $beta = null,
		/** Specify which account types can create policies for this category. `blocked` Blocks unconditionally for all accounts. `removalPending` Allows removal from policies but disables addition. `noBlock` Prevents blocking. */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustGatewayCategoriesListCategoriesSubcategoriesItemClass $class = null,
		/** Provide a short summary of domains in the category. */
		public ?string $description = null,
		/** Identify this category. Only one category per ID. */
		public ?int $id = null,
		/** Specify the category name. */
		public ?string $name = null,
	) {
	}
}
