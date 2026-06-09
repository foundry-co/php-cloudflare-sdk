<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specify the region where your private key can be held locally.
 */
readonly class CertificatePacksPacksCertificatesItemGeoRestrictions
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\CertificatePacksPacksCertificatesItemGeoRestrictionsLabel $label = null,
	) {
	}
}
