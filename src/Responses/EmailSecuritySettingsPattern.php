<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A URL ignore pattern that exempts matching URLs from being rewritten by Email Security.
 */
readonly class EmailSecuritySettingsPattern
{
	public function __construct(
		public \DateTimeImmutable $createdAt,
		public mixed $id,
		/** Regular expression matching URLs that should not be rewritten. */
		public string $pattern,
		/** Optional note describing the reason for the ignore pattern. */
		public ?string $comments = null,
		/** Deprecated, use `modified_at` instead. End of life: November 1, 2026. */
		public ?\DateTimeImmutable $lastModified = null,
		public ?\DateTimeImmutable $modifiedAt = null,
	) {
	}
}
