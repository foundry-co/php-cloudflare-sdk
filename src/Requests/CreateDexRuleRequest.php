<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a DEX Rule
 */
readonly class CreateDexRuleRequest
{
	public function __construct(
		/** The wirefilter expression to match. */
		public string $match,
		/** The name of the Rule. */
		public string $name,
		public ?string $description = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'match' => $this->match,
		    'name' => $this->name,
		    'description' => $this->description,
		], fn ($v) => $v !== null);
	}
}
