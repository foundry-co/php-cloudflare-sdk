<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Preview operations covered by a Token Validation rule
 */
readonly class TokenValidationRulesPreviewRequest
{
	public function __construct(
		/** Ignore operations that were otherwise included by `include`. */
		public ?array $exclude = null,
		/** Select all matching operations. */
		public ?array $include = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'exclude' => $this->exclude,
		    'include' => $this->include,
		], fn ($v) => $v !== null);
	}
}
