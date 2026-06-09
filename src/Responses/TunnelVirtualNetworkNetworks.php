<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TunnelVirtualNetworkNetworks
{
	public function __construct(
		/** Optional remark describing the virtual network. */
		public string $comment,
		/** Timestamp of when the resource was created. */
		public \DateTimeImmutable $createdAt,
		/** UUID of the virtual network. */
		public string $id,
		/** If `true`, this virtual network is the default for the account. */
		public bool $isDefaultNetwork,
		/** A user-friendly name for the virtual network. */
		public string $name,
		/** Timestamp of when the resource was deleted. If `null`, the resource has not been deleted. */
		public ?\DateTimeImmutable $deletedAt = null,
	) {
	}
}
