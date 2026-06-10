<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SlurperGetJobProgress
{
	public function __construct(
		public ?string $createdAt = null,
		public ?int $failedObjects = null,
		public ?string $id = null,
		public ?int $objects = null,
		public ?int $skippedObjects = null,
		public ?\FoundryCo\Cloudflare\Enums\SlurperGetJobProgressStatus $status = null,
		public ?int $transferredObjects = null,
	) {
	}
}
