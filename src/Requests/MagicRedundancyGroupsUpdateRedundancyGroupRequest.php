<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a Redundancy Group
 */
readonly class MagicRedundancyGroupsUpdateRedundancyGroupRequest
{
	public function __construct(
		/** Human-readable name for the redundancy group */
		public string $name,
		/** Optional description */
		public ?string $description = null,
		/** Tunnels to add to the group */
		public ?array $members = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'description' => $this->description,
		    'members' => $this->members,
		], fn ($v) => $v !== null);
	}
}
