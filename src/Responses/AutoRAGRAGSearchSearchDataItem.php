<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AutoRAGRAGSearchSearchDataItem
{
	public function __construct(
		public float $score,
		public ?array $attributes = null,
		public ?array $content = null,
		public ?string $fileId = null,
		public ?string $filename = null,
	) {
	}
}
