<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specifies a reference to the autonomous systems (AS) that the IP address belongs to.
 */
readonly class IpIntelligenceGetIpOverviewBelongsToRef
{
	public function __construct(
		public ?string $country = null,
		public ?string $description = null,
		public ?string $id = null,
		/** Infrastructure type of this ASN. */
		public ?\FoundryCo\Cloudflare\Enums\IpIntelligenceGetIpOverviewBelongsToRefType $type = null,
		public ?string $value = null,
	) {
	}
}
