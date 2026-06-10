<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a relay
 */
readonly class PutAccountsaccountIdMoqRelaysrelayIdRequest
{
	public function __construct(
		/**
		 * origin_fallback and lingering_subscribe are mutually exclusive.
		 */
		public ?\FoundryCo\Cloudflare\Responses\PutAccountsaccountIdMoqRelaysrelayIdRequestConfig $config = null,
		public ?string $name = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'config' => $this->config?->toArray(),
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
