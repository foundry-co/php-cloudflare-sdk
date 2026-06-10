<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update TCP Flow Protection filter.
 */
readonly class UpdateTcpFlowProtectionFilterRequest
{
	public function __construct(
		/** The new filter expression. Optional. */
		public ?string $expression = null,
		/** The new mode for the filter. Optional. Must be one of 'enabled', 'disabled', 'monitoring'. */
		public ?string $mode = null,
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
