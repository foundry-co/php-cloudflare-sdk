<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Cloudflare Source Subnet
 */
readonly class ZeroTrustNetworksSubnetUpdateCloudflareSourceRequest
{
	public function __construct(
		/** An optional description of the subnet. */
		public ?string $comment = null,
		/** A user-friendly name for the subnet. */
		public ?string $name = null,
		/** The private IPv4 or IPv6 range defining the subnet, in CIDR notation. */
		public ?string $network = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'comment' => $this->comment,
		    'name' => $this->name,
		    'network' => $this->network,
		], fn ($v) => $v !== null);
	}
}
