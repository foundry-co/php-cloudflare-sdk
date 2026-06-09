<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a WAF override
 */
readonly class WafOverridesCreateAWafOverrideRequest
{
	public function __construct(
		/** The URLs to include in the current WAF override. You can use wildcards. Each entered URL will be escaped before use, which means you can only use simple wildcard patterns. */
		public array $urls,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'urls' => $this->urls,
		], fn ($v) => $v !== null);
	}
}
