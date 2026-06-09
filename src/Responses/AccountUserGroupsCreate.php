<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A group of policies resources.
 */
readonly class AccountUserGroupsCreate
{
	public function __construct(
		/** Timestamp for the creation of the user group */
		public \DateTimeImmutable $createdOn,
		/** User Group identifier tag. */
		public mixed $id,
		/** Last time the user group was modified. */
		public \DateTimeImmutable $modifiedOn,
		/** Name of the user group. */
		public string $name,
		/** Policies attached to the User group */
		public ?array $policies = null,
	) {
	}
}
