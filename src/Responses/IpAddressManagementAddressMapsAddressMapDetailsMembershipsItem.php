<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class IpAddressManagementAddressMapsAddressMapDetailsMembershipsItem
{
	public function __construct(
		/** Controls whether the membership can be deleted via the API or not. */
		public ?bool $canDelete = null,
		public ?\DateTimeImmutable $createdAt = null,
		/** The identifier for the membership (eg. a zone or account tag). */
		public ?string $identifier = null,
		/** The type of the membership. */
		public ?\FoundryCo\Cloudflare\Enums\IpAddressManagementAddressMapsAddressMapDetailsMembershipsItemKind $kind = null,
	) {
	}
}
