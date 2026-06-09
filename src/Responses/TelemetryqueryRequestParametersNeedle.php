<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Full-text search expression applied across all event fields. Matches events containing the specified text.
 */
readonly class TelemetryqueryRequestParametersNeedle
{
	public function __construct(
		/** The text or pattern to search for. */
		public mixed $value,
		/** When true, treats the value as a regular expression (RE2 syntax). */
		public ?bool $isRegex = null,
		/** When true, performs a case-sensitive search. Defaults to case-insensitive. */
		public ?bool $matchCase = null,
	) {
	}
}
