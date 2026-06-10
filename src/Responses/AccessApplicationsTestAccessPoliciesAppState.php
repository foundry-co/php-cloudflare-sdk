<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessApplicationsTestAccessPoliciesAppState
{
	public function __construct(
		/** UUID. */
		public ?string $appUid = null,
		public ?string $aud = null,
		public ?string $hostname = null,
		public ?string $name = null,
		public ?array $policies = null,
		public ?string $status = null,
	) {
	}
}
