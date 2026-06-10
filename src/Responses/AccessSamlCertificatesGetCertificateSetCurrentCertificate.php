<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessSamlCertificatesGetCertificateSetCurrentCertificate
{
	public function __construct(
		/** Indicates whether the certificate can be used for IdP configuration. */
		public ?bool $isCurrent = null,
		/** Certificate expiration date */
		public ?\DateTimeImmutable $notAfter = null,
		/** The public certificate in PEM format */
		public ?string $publicCertificate = null,
		/** Unique identifier for the certificate */
		public ?string $uid = null,
	) {
	}
}
