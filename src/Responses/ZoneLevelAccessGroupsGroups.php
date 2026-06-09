<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZoneLevelAccessGroupsGroups
{
	public function __construct(
		public ?\DateTimeImmutable $createdAt = null,
		/** Rules evaluated with a NOT logical operator. To match a policy, a user cannot meet any of the Exclude rules. */
		public ?array $exclude = null,
		/** UUID. */
		public ?string $id = null,
		/** Rules evaluated with an OR logical operator. A user needs to meet only one of the Include rules. */
		public ?array $include = null,
		/** The name of the Access group. */
		public ?string $name = null,
		/** Rules evaluated with an AND logical operator. To match a policy, a user must meet all of the Require rules. */
		public ?array $require = null,
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
