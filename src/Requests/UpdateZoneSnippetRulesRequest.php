<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update zone snippet rules
 */
readonly class UpdateZoneSnippetRulesRequest
{
	public function __construct(
		/** Lists snippet rules. */
		public array $rules,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'rules' => $this->rules,
		], fn ($v) => $v !== null);
	}
}
