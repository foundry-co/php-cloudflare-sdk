<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update an ingress rule
 */
readonly class SinkholeConfigUpdateIngressRequest
{
	public function __construct(
		/** The CIDR block for the ingress rule in IPv4 or IPv6 notation (e.g., 192.0.2.0/24). Must be a Cloudflare BYOIP associated with your account. */
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
