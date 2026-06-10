<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PerHostnameAuthenticatedOriginPullListCertificates
{
	public function __construct(
		/** The hostname certificate. */
		public ?string $certificate = null,
		/** The date when the certificate expires. */
		public ?\DateTimeImmutable $expiresOn = null,
		/** Identifier. */
		public ?string $id = null,
		/** The certificate authority that issued the certificate. */
		public ?string $issuer = null,
		/** The serial number on the uploaded certificate. */
		public ?string $serialNumber = null,
		/** The type of hash used for the certificate. */
		public ?string $signature = null,
		/** Status of the certificate or the association. */
		public ?\FoundryCo\Cloudflare\Enums\PerHostnameAuthenticatedOriginPullListCertificatesStatus $status = null,
		/** The time when the certificate was uploaded. */
		public ?\DateTimeImmutable $uploadedOn = null,
	) {
	}
}
