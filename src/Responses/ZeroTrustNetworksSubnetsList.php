<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustNetworksSubnetsList
{
	public function __construct(
		/** An optional description of the subnet. */
		public ?string $comment = null,
		/** Timestamp of when the resource was created. */
		public ?\DateTimeImmutable $createdAt = null,
		/** Timestamp of when the resource was deleted. If `null`, the resource has not been deleted. */
		public ?\DateTimeImmutable $deletedAt = null,
		/** The UUID of the subnet. */
		public ?string $id = null,
		/** If `true`, this is the default subnet for the account. There can only be one default subnet per account. */
		public ?bool $isDefaultNetwork = null,
		/** A user-friendly name for the subnet. */
		public ?string $name = null,
		/** The private IPv4 or IPv6 range defining the subnet, in CIDR notation. */
		public ?string $network = null,
		/** The type of subnet. */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustNetworksSubnetsListSubnetType $subnetType = null,
	) {
	}
}
