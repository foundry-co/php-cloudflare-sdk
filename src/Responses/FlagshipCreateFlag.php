<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class FlagshipCreateFlag
{
	public function __construct(
		/** Variation served when no rule matches or the flag is disabled. Must be a key in `variations`. */
		public ?string $defaultVariation = null,
		/** When false, the flag bypasses all rules and always serves `default_variation`. */
		public ?bool $enabled = null,
		/** Unique identifier for the flag within an app. Used in all evaluation and SDK calls. */
		public ?string $key = null,
		/** Targeting rules evaluated in ascending `priority`; the first matching rule wins. An empty array means the flag always serves `default_variation`. */
		public ?array $rules = null,
		/** Map of variation name to value. All values must be the same type (boolean, string, number, or JSON object/array). Each serialized value must be 10KB or smaller. */
		public ?array $variations = null,
		public ?string $description = null,
		/** Value type of the flag's variations. Inferred from the variation values on write, so it may be omitted in requests. */
		public ?\FoundryCo\Cloudflare\Enums\FlagshipCreateFlagType $type = null,
		public ?string $updatedAt = null,
		public ?string $updatedBy = null,
	) {
	}
}
