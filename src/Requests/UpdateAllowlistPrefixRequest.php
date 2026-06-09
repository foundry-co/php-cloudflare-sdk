<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update allowlist prefix.
 */
readonly class UpdateAllowlistPrefixRequest
{
	public function __construct(
		/** A comment describing the allowlist prefix. Optional. */
		public ?string $comment = null,
		/** Whether to enable the allowlist prefix into effect. Optional. */
		public ?bool $enabled = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'comment' => $this->comment,
		    'enabled' => $this->enabled,
		], fn ($v) => $v !== null);
	}
}
