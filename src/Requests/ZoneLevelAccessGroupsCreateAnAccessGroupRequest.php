<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create an Access group
 */
readonly class ZoneLevelAccessGroupsCreateAnAccessGroupRequest
{
	public function __construct(
		/** Rules evaluated with an OR logical operator. A user needs to meet only one of the Include rules. */
		public array $include,
		/** The name of the Access group. */
		public string $name,
		/** Rules evaluated with a NOT logical operator. To match a policy, a user cannot meet any of the Exclude rules. */
		public ?array $exclude = null,
		/** Rules evaluated with an AND logical operator. To match a policy, a user must meet all of the Require rules. */
		public ?array $require = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'include' => $this->include,
		    'name' => $this->name,
		    'exclude' => $this->exclude,
		    'require' => $this->require,
		], fn ($v) => $v !== null);
	}
}
