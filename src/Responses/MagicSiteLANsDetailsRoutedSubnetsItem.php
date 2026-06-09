<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicSiteLANsDetailsRoutedSubnetsItem
{
	public function __construct(
		/** A valid IPv4 address. */
		public string $nextHop,
		/** A valid CIDR notation representing an IP range. */
		public string $prefix,
		public ?MagicSiteLANsDetailsRoutedSubnetsItemNat $nat = null,
	) {
	}
}
