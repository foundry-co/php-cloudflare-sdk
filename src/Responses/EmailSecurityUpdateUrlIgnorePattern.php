<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A URL ignore pattern that exempts matching URLs from being rewritten by Email Security.
 */
readonly class EmailSecurityUpdateUrlIgnorePattern
{
	public function __construct(
		public ?\DateTimeImmutable $createdAt = null,
		public mixed $id = null,
		/** Regular expression matching URLs that should not be rewritten. */
		public ?string $pattern = null,
		/** Optional note describing the reason for the ignore pattern. */
		public ?string $comments = null,
		/** Deprecated, use `modified_at` instead. End of life: November 1, 2026. */
		public ?\DateTimeImmutable $lastModified = null,
		public ?\DateTimeImmutable $modifiedAt = null,
	) {
	}
}
