<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * References an Organization in the Cloudflare data model.
 */
readonly class OrganizationsCreateUserOrganization
{
	public function __construct(
		public \DateTimeImmutable $createTime,
		public mixed $id,
		public OrganizationsCreateUserOrganizationMeta $meta,
		public string $name,
		public ?OrganizationsCreateUserOrganizationParent $parent = null,
		public ?OrganizationsCreateUserOrganizationProfile $profile = null,
	) {
	}
}
