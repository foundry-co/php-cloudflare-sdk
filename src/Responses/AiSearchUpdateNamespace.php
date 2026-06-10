<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchUpdateNamespace
{
	public function __construct(
		public ?\DateTimeImmutable $createdAt = null,
		public ?string $name = null,
		/** Optional description for the namespace. Max 256 characters. */
		public ?string $description = null,
	) {
	}
}
