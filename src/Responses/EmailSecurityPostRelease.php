<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityPostRelease
{
	public function __construct(
		public mixed $id = null,
		public ?array $delivered = null,
		public ?array $failed = null,
		/** Deprecated, use `id` instead. End of life: November 1, 2026. */
		public mixed $postfixId = null,
		public ?array $undelivered = null,
	) {
	}
}
