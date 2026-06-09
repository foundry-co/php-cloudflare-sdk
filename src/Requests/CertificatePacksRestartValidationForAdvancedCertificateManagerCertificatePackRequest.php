<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Restart Validation or Update Advanced Certificate Manager Certificate Pack
 */
readonly class CertificatePacksRestartValidationForAdvancedCertificateManagerCertificatePackRequest
{
	public function __construct(
		/** Whether or not to add Cloudflare Branding for the order.  This will add a subdomain of sni.cloudflaressl.com as the Common Name if set to true. */
		public ?bool $cloudflareBranding = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'cloudflare_branding' => $this->cloudflareBranding,
		], fn ($v) => $v !== null);
	}
}
