<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PerHostnameAuthenticatedOriginPullEnableOrDisableAHostnameForClientAuthentication
{
	public function __construct(
		/** Identifier. */
		public ?string $certId = null,
		/** Status of the certificate or the association. */
		public ?\FoundryCo\Cloudflare\Enums\PerHostnameAuthenticatedOriginPullEnableOrDisableAHostnameForClientAuthenticationCertStatus $certStatus = null,
		/** The time when the certificate was updated. */
		public ?\DateTimeImmutable $certUpdatedAt = null,
		/** The time when the certificate was uploaded. */
		public ?\DateTimeImmutable $certUploadedOn = null,
		/** The hostname certificate. */
		public ?string $certificate = null,
		/** The time when the certificate was created. */
		public ?\DateTimeImmutable $createdAt = null,
		/** Indicates whether hostname-level authenticated origin pulls is enabled. A null value voids the association. */
		public ?bool $enabled = null,
		/** The date when the certificate expires. */
		public ?\DateTimeImmutable $expiresOn = null,
		/** The hostname on the origin for which the client certificate uploaded will be used. */
		public ?string $hostname = null,
		/** The certificate authority that issued the certificate. */
		public ?string $issuer = null,
		/** The serial number on the uploaded certificate. */
		public ?string $serialNumber = null,
		/** The type of hash used for the certificate. */
		public ?string $signature = null,
		/** Status of the certificate or the association. */
		public ?\FoundryCo\Cloudflare\Enums\PerHostnameAuthenticatedOriginPullEnableOrDisableAHostnameForClientAuthenticationStatus $status = null,
		/** The time when the certificate was updated. */
		public ?\DateTimeImmutable $updatedAt = null,
		/** Identifier. */
		public ?string $id = null,
		/** The hostname certificate's private key. */
		public ?string $privateKey = null,
	) {
	}
}
