<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a virtual network
 */
readonly class TunnelVirtualNetworkUpdateRequest
{
	public function __construct(
		/** Optional remark describing the virtual network. */
		public ?string $comment = null,
		/** If `true`, this virtual network is the default for the account. */
		public ?bool $isDefaultNetwork = null,
		/** A user-friendly name for the virtual network. */
		public ?string $name = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'comment' => $this->comment,
		    'is_default_network' => $this->isDefaultNetwork,
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
