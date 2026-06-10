<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create new indicator feed
 */
readonly class CustomIndicatorFeedsCreateIndicatorFeedsRequest
{
	public function __construct(
		/** The description of the example test */
		public ?string $description = null,
		/** The name of the indicator feed */
		public ?string $name = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
