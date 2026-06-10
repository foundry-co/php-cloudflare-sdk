<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityBatchUrlIgnorePatternsRequestPatchesItem
{
	public function __construct(
		public mixed $id = null,
		/** Optional note describing the reason for the ignore pattern. */
		public ?string $comments = null,
		/** Regular expression matching URLs that should not be rewritten. */
		public ?string $pattern = null,
	) {
	}
}
