<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a virtual network
 */
readonly class TunnelVirtualNetworkCreateAVirtualNetworkRequest
{
	public function __construct(
		/** A user-friendly name for the virtual network. */
		public string $name,
		/** Optional remark describing the virtual network. */
		public ?string $comment = null,
		/** If `true`, this virtual network is the default for the account. */
		public ?bool $isDefault = null,
		/** If `true`, this virtual network is the default for the account. */
		public ?bool $isDefaultNetwork = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'comment' => $this->comment,
		    'is_default' => $this->isDefault,
		    'is_default_network' => $this->isDefaultNetwork,
		], fn ($v) => $v !== null);
	}
}
