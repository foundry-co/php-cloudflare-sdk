<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MTlsCertificateManagementDeleteMTlsCertificate
{
	public function __construct(
		/** Indicates whether the certificate is a CA or leaf certificate. */
		public ?bool $ca = null,
		/** The uploaded root CA certificate. */
		public ?string $certificates = null,
		/** When the certificate expires. */
		public ?\DateTimeImmutable $expiresOn = null,
		/** Identifier. */
		public ?string $id = null,
		/** The certificate authority that issued the certificate. */
		public ?string $issuer = null,
		/** Optional unique name for the certificate. Only used for human readability. */
		public ?string $name = null,
		/** The certificate serial number. */
		public ?string $serialNumber = null,
		/** The type of hash used for the certificate. */
		public ?string $signature = null,
		/** The type of the certificate, indicating how it was created and who manages it. */
		public ?\FoundryCo\Cloudflare\Enums\MTlsCertificateManagementDeleteMTlsCertificateType $type = null,
		/** This is the time the certificate was uploaded. */
		public ?\DateTimeImmutable $uploadedOn = null,
	) {
	}
}
