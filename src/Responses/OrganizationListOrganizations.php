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
readonly class OrganizationListOrganizations
{
	public function __construct(
		public ?\DateTimeImmutable $createTime = null,
		public mixed $id = null,
		public ?OrganizationListOrganizationsMeta $meta = null,
		public ?string $name = null,
		public ?OrganizationListOrganizationsParent $parent = null,
		public ?OrganizationListOrganizationsProfile $profile = null,
	) {
	}
}
