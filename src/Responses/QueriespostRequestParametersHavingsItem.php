<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class QueriespostRequestParametersHavingsItem
{
	public function __construct(
		public ?string $key = null,
		public ?\FoundryCo\Cloudflare\Enums\QueriespostRequestParametersHavingsItemOperation $operation = null,
		public ?float $value = null,
	) {
	}
}
