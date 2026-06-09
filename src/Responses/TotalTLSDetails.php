<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TotalTLSDetails
{
	public function __construct(
		/** The Certificate Authority that Total TLS certificates will be issued through. */
		public ?\FoundryCo\Cloudflare\Enums\TotalTLSDetailsCertificateAuthority $certificateAuthority = null,
		/** If enabled, Total TLS will order a hostname specific TLS certificate for any proxied A, AAAA, or CNAME record in your zone. */
		public ?bool $enabled = null,
		/** The validity period in days for the certificates ordered via Total TLS. */
		public ?\FoundryCo\Cloudflare\Enums\TotalTLSDetailsValidityPeriod $validityPeriod = null,
	) {
	}
}
