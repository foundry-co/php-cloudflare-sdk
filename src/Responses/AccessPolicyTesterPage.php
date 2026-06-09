<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessPolicyTesterPage
{
	public function __construct(
		/** The email of the user. */
		public ?string $email = null,
		/** UUID. */
		public ?string $id = null,
		/** The name of the user. */
		public ?string $name = null,
		/** Policy evaluation result for an individual user. */
		public ?\FoundryCo\Cloudflare\Enums\AccessPolicyTesterPageStatus $status = null,
	) {
	}
}
