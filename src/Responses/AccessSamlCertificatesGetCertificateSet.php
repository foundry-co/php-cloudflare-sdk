<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessSamlCertificatesGetCertificateSet
{
	public function __construct(
		/** When the certificate set was created */
		public ?\DateTimeImmutable $createdAt = null,
		/** Unique identifier for the certificate set */
		public ?string $uid = null,
		/** When the certificate set was last updated */
		public ?\DateTimeImmutable $updatedAt = null,
		/** The current active certificate */
		public ?AccessSamlCertificatesGetCertificateSetCurrentCertificate $currentCertificate = null,
		/** The previous certificate (maintained during rotation period). May be null when no rotation has occurred. Mirrors the structure of `saml_certificate`. */
		public ?array $previousCertificate = null,
	) {
	}
}
