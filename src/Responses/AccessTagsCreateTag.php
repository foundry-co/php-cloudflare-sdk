<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A tag
 */
readonly class AccessTagsCreateTag
{
	public function __construct(
		/** The name of the tag */
		public ?string $name = null,
		/** The number of applications that have this tag */
		public ?int $appCount = null,
		public mixed $createdAt = null,
		public mixed $updatedAt = null,
	) {
	}
}
