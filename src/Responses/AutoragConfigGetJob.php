<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AutoragConfigGetJob
{
	public function __construct(
		public ?string $id = null,
		public ?\FoundryCo\Cloudflare\Enums\AutoragConfigGetJobSource $source = null,
		public ?string $endReason = null,
		public ?string $endedAt = null,
		public ?string $lastSeenAt = null,
		public ?string $startedAt = null,
	) {
	}
}
