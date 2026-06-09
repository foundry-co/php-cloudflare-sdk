<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class FiltersFilter
{
	public function __construct(
		/** An informative summary of the filter. */
		public ?string $description = null,
		/** The filter expression. For more information, refer to [Expressions](https://developers.cloudflare.com/ruleset-engine/rules-language/expressions/). */
		public ?string $expression = null,
		/** The unique identifier of the filter. */
		public ?string $id = null,
		/** When true, indicates that the filter is currently paused. */
		public ?bool $paused = null,
		/** A short reference tag. Allows you to select related filters. */
		public ?string $ref = null,
	) {
	}
}
