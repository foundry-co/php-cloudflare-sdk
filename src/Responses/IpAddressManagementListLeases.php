<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class IpAddressManagementListLeases
{
	public function __construct(
		/**
		 * Timestamp of the moment the lease was created.
		 */
		public ?\DateTimeImmutable $activeFrom = null,
		/** CIDRs attached to the lease */
		public ?array $cidrs = null,
		/** Timestamp of the moment the object was created. */
		public ?\DateTimeImmutable $createdAt = null,
		/** Identifier for the lease */
		public ?string $id = null,
		/** Timestamp of the moment the object was modified. */
		public ?\DateTimeImmutable $modifiedAt = null,
		/** Cloudflare account ID of the account owning the lease. */
		public ?string $ownerId = null,
		/** Describes the purpose of the addresses. */
		public ?string $purpose = null,
	) {
	}
}
