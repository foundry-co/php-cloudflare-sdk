<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AutoragConfigAiSearch
{
	public function __construct(
		public ?string $response = null,
		public ?string $searchQuery = null,
		public ?array $data = null,
		public ?bool $hasMore = null,
		public ?string $nextPage = null,
		public ?string $object = null,
	) {
	}
}
