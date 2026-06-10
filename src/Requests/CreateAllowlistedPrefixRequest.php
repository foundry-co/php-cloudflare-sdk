<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create allowlist prefix.
 */
readonly class CreateAllowlistedPrefixRequest
{
	public function __construct(
		/** An comment describing the allowlist prefix. */
		public string $comment,
		/** Whether to enable the allowlist prefix into effect. */
		public bool $enabled,
		/** The allowlist prefix to add in CIDR format. */
		public string $prefix,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'comment' => $this->comment,
		    'enabled' => $this->enabled,
		    'prefix' => $this->prefix,
		], fn ($v) => $v !== null);
	}
}
