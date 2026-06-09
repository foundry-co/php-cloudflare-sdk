<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create WARP IP subnet
 */
readonly class ZeroTrustNetworksSubnetCreateWarpRequest
{
	public function __construct(
		/** A user-friendly name for the subnet. */
		public string $name,
		/** The private IPv4 or IPv6 range defining the subnet, in CIDR notation. */
		public string $network,
		/** An optional description of the subnet. */
		public ?string $comment = null,
		/** If `true`, this is the default subnet for the account. There can only be one default subnet per account. */
		public ?bool $isDefaultNetwork = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'network' => $this->network,
		    'comment' => $this->comment,
		    'is_default_network' => $this->isDefaultNetwork,
		], fn ($v) => $v !== null);
	}
}
