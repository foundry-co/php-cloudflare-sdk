<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Define an expression to search using full-text search.
 */
readonly class SharedquerygetRunQueryParametersNeedle
{
	public function __construct(
		public mixed $value = null,
		public ?bool $isRegex = null,
		public ?bool $matchCase = null,
	) {
	}
}
