<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create BGP Prefix
 */
readonly class IpAddressManagementPrefixesCreateBgpPrefixRequest
{
	public function __construct(
		/** IP Prefix in Classless Inter-Domain Routing format. */
		public string $cidr,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'cidr' => $this->cidr,
		], fn ($v) => $v !== null);
	}
}
