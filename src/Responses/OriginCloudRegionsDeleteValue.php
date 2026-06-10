<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A single origin IP-to-cloud-region mapping.
 */
readonly class OriginCloudRegionsDeleteValue
{
	public function __construct(
		/** The origin IP address (IPv4 or IPv6, canonicalized). */
		public ?string $originIp = null,
		/** Cloud vendor region identifier. */
		public ?string $region = null,
		/** Cloud vendor hosting the origin. */
		public ?\FoundryCo\Cloudflare\Enums\OriginCloudRegionsDeleteValueVendor $vendor = null,
		/** Time this mapping was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
	) {
	}
}
