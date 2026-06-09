<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A single origin IP-to-cloud-region mapping.
 */
readonly class OriginCloudRegionsListValueItem
{
	public function __construct(
		/** The origin IP address (IPv4 or IPv6, canonicalized). */
		public string $originIp,
		/** Cloud vendor region identifier. */
		public string $region,
		/** Cloud vendor hosting the origin. */
		public \FoundryCo\Cloudflare\Enums\OriginCloudRegionsListValueItemVendor $vendor,
		/** Time this mapping was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
	) {
	}
}
