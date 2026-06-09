<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class OrganizationsCreateUserOrganizationRequestMeta
{
	public function __construct(
		public ?OrganizationsCreateUserOrganizationRequestMetaFlags $flags = null,
		/**
		 * Ordered chain of organization tags from the root organization down to
		 * (and including) this organization itself. Root organizations return a
		 * single-element array containing their own tag; sub-organizations return
		 * `[rootTag, ...intermediateTags, parentTag, selfTag]`. Useful for
		 * constructing authorization scopes that need to cover every ancestor
		 * in the hierarchy.
		 */
		public ?array $hierarchyTags = null,
		public ?string $managedBy = null,
	) {
	}
}
