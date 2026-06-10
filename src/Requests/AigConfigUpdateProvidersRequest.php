<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a Provider Configs
 */
readonly class AigConfigUpdateProvidersRequest
{
	public function __construct(
		public string $secret,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'secret' => $this->secret,
		], fn ($v) => $v !== null);
	}
}
