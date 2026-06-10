<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Enable or Disable Total TLS
 */
readonly class TotalTlsEnableOrDisableTotalTlsRequest
{
	public function __construct(
		/** If enabled, Total TLS will order a hostname specific TLS certificate for any proxied A, AAAA, or CNAME record in your zone. */
		public bool $enabled,
		/** The Certificate Authority that Total TLS certificates will be issued through. */
		public ?\FoundryCo\Cloudflare\Enums\TotalTlsEnableOrDisableTotalTlsRequestCertificateAuthority $certificateAuthority = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'enabled' => $this->enabled,
		    'certificate_authority' => $this->certificateAuthority?->value,
		], fn ($v) => $v !== null);
	}
}
