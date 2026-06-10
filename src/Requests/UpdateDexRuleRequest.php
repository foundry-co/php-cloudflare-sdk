<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a DEX Rule
 */
readonly class UpdateDexRuleRequest
{
	public function __construct(
		public ?string $description = null,
		/** The wirefilter expression to match. */
		public ?string $match = null,
		/** The name of the Rule. */
		public ?string $name = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		    'match' => $this->match,
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
