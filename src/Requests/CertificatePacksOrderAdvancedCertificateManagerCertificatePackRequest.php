<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Order Advanced Certificate Manager Certificate Pack
 */
readonly class CertificatePacksOrderAdvancedCertificateManagerCertificatePackRequest
{
	public function __construct(
		/** Certificate Authority selected for the order.  For information on any certificate authority specific details or restrictions [see this page for more details](https://developers.cloudflare.com/ssl/reference/certificate-authorities). */
		public \FoundryCo\Cloudflare\Enums\CertificatePacksOrderAdvancedCertificateManagerCertificatePackRequestCertificateAuthority $certificateAuthority,
		/** Comma separated list of valid host names for the certificate packs. Must contain the zone apex, may not contain more than 50 hosts, and may not be empty. */
		public array $hosts,
		/** Type of certificate pack. */
		public \FoundryCo\Cloudflare\Enums\CertificatePacksOrderAdvancedCertificateManagerCertificatePackRequestType $type,
		/** Validation Method selected for the order. */
		public \FoundryCo\Cloudflare\Enums\CertificatePacksOrderAdvancedCertificateManagerCertificatePackRequestValidationMethod $validationMethod,
		/** Validity Days selected for the order. */
		public \FoundryCo\Cloudflare\Enums\CertificatePacksOrderAdvancedCertificateManagerCertificatePackRequestValidityDays $validityDays,
		/** Whether or not to add Cloudflare Branding for the order.  This will add a subdomain of sni.cloudflaressl.com as the Common Name if set to true. */
		public ?bool $cloudflareBranding = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'certificate_authority' => $this->certificateAuthority->value,
		    'hosts' => $this->hosts,
		    'type' => $this->type->value,
		    'validation_method' => $this->validationMethod->value,
		    'validity_days' => $this->validityDays->value,
		    'cloudflare_branding' => $this->cloudflareBranding,
		], fn ($v) => $v !== null);
	}
}
