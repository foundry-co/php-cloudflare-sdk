<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specifies a reference to the autonomous systems (AS) that the IP address belongs to.
 */
readonly class IPIntelligenceOverviewBelongsToRef
{
	public function __construct(
		public ?string $country = null,
		public ?string $description = null,
		public ?string $id = null,
		/** Infrastructure type of this ASN. */
		public ?\FoundryCo\Cloudflare\Enums\IPIntelligenceOverviewBelongsToRefType $type = null,
		public ?string $value = null,
	) {
	}
}
