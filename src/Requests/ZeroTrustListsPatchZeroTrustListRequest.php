<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Patch Zero Trust list.
 */
readonly class ZeroTrustListsPatchZeroTrustListRequest
{
	public function __construct(
		/** Add items to the list. */
		public ?array $append = null,
		/** Lists of item values you want to remove. */
		public ?array $remove = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'append' => $this->append,
		    'remove' => $this->remove,
		], fn ($v) => $v !== null);
	}
}
