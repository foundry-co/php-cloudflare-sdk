<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TunnelVirtualNetworkListVirtualNetworks
{
	public function __construct(
		/** Optional remark describing the virtual network. */
		public ?string $comment = null,
		/** Timestamp of when the resource was created. */
		public ?\DateTimeImmutable $createdAt = null,
		/** UUID of the virtual network. */
		public ?string $id = null,
		/** If `true`, this virtual network is the default for the account. */
		public ?bool $isDefaultNetwork = null,
		/** A user-friendly name for the virtual network. */
		public ?string $name = null,
		/** Timestamp of when the resource was deleted. If `null`, the resource has not been deleted. */
		public ?\DateTimeImmutable $deletedAt = null,
	) {
	}
}
