<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Define an expression to search using full-text search.
 */
readonly class SavedQueriesQueriesgetParametersNeedle
{
	public function __construct(
		public mixed $value,
		public ?bool $isRegex = null,
		public ?bool $matchCase = null,
	) {
	}
}
