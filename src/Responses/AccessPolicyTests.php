<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessPolicyTests
{
	public function __construct(
		/** The UUID of the policy test. */
		public ?string $id = null,
		/** The status of the policy test request. */
		public ?\FoundryCo\Cloudflare\Enums\AccessPolicyTestsStatus $status = null,
	) {
	}
}
