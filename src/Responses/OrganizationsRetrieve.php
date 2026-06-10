<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * References an Organization in the Cloudflare data model.
 */
readonly class OrganizationsRetrieve
{
	public function __construct(
		public ?\DateTimeImmutable $createTime = null,
		public mixed $id = null,
		public ?OrganizationsRetrieveMeta $meta = null,
		public ?string $name = null,
		public ?OrganizationsRetrieveParent $parent = null,
		public ?OrganizationsRetrieveProfile $profile = null,
	) {
	}
}
