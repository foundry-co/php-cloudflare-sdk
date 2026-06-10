<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostAccountsaccountIdMoqRelaysConfigOriginFallback
{
	public function __construct(
		public ?bool $enabled = null,
		/**
		 * Ordered list of upstream origin relays. Each entry is an object
		 * (not a bare string) so per-origin configuration can be added in
		 * the future without another breaking change.
		 */
		public ?array $origins = null,
	) {
	}
}
