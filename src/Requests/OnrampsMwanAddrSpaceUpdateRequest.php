<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Magic WAN Address Space
 */
readonly class OnrampsMwanAddrSpaceUpdateRequest
{
	public function __construct(
		public array $prefixes,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'prefixes' => $this->prefixes,
		], fn ($v) => $v !== null);
	}
}
