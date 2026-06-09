<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CustomHostnameForAZoneDetails
{
	public function __construct(
		/** The custom hostname that will point to your hostname via CNAME. */
		public string $hostname,
		/** Identifier. */
		public string $id,
		/** SSL properties for the custom hostname. */
		public mixed $ssl = null,
	) {
	}
}
