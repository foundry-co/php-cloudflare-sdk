<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TenantsListMemberships
{
	public function __construct(
		public ?string $userEmail = null,
		public ?string $userName = null,
		public ?string $userTag = null,
	) {
	}
}
