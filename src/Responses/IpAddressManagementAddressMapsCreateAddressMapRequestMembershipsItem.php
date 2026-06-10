<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class IpAddressManagementAddressMapsCreateAddressMapRequestMembershipsItem
{
	public function __construct(
		/** The identifier for the membership (eg. a zone or account tag). */
		public ?string $identifier = null,
		/** The type of the membership. */
		public ?\FoundryCo\Cloudflare\Enums\IpAddressManagementAddressMapsCreateAddressMapRequestMembershipsItemKind $kind = null,
	) {
	}
}
