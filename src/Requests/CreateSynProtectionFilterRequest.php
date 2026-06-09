<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a SYN Protection filter.
 */
readonly class CreateSynProtectionFilterRequest
{
	public function __construct(
		/** The filter expression. */
		public string $expression,
		/** The filter's mode. Must be one of 'enabled', 'disabled', 'monitoring'. */
		public string $mode,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'expression' => $this->expression,
		    'mode' => $this->mode,
		], fn ($v) => $v !== null);
	}
}
