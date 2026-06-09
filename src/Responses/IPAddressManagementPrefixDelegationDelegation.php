<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class IPAddressManagementPrefixDelegationDelegation
{
	public function __construct(
		/** IP Prefix in Classless Inter-Domain Routing format. */
		public ?string $cidr = null,
		public ?\DateTimeImmutable $createdAt = null,
		/** Account identifier for the account to which prefix is being delegated. */
		public ?string $delegatedAccountId = null,
		/** Identifier of a Delegation. */
		public ?string $id = null,
		public ?\DateTimeImmutable $modifiedAt = null,
		/** Identifier of an IP Prefix. */
		public ?string $parentPrefixId = null,
	) {
	}
}
