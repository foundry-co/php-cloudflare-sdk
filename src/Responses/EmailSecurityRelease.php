<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityRelease
{
	public function __construct(
		public mixed $id,
		public ?array $delivered = null,
		public ?array $failed = null,
		/** Deprecated, use `id` instead. End of life: November 1, 2026. */
		public mixed $postfixId = null,
		public ?array $undelivered = null,
	) {
	}
}
