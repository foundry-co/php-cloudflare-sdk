<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UserDetailsOrganizationsItem
{
	public function __construct(
		/** Identifier */
		public ?string $id = null,
		/** Organization name. */
		public ?string $name = null,
		/** Access permissions for this User. */
		public ?array $permissions = null,
		/** List of roles that a user has within an organization. */
		public ?array $roles = null,
		/** Whether the user is a member of the organization or has an invitation pending. */
		public ?\FoundryCo\Cloudflare\Enums\UserDetailsOrganizationsItemStatus $status = null,
	) {
	}
}
