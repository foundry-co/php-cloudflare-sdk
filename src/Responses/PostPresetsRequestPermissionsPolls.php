<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Poll permissions
 */
readonly class PostPresetsRequestPermissionsPolls
{
	public function __construct(
		/** Can create polls */
		public bool $canCreate,
		/** Can view polls */
		public bool $canView,
		/** Can vote on polls */
		public bool $canVote,
	) {
	}
}
