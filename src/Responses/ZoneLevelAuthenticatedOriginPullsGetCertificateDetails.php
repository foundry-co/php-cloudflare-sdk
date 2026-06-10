<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZoneLevelAuthenticatedOriginPullsGetCertificateDetails
{
	public function __construct(
		/** The zone's leaf certificate. */
		public ?string $certificate = null,
		/** When the certificate from the authority expires. */
		public ?\DateTimeImmutable $expiresOn = null,
		/** Identifier. */
		public ?string $id = null,
		/** The certificate authority that issued the certificate. */
		public ?string $issuer = null,
		/** The type of hash used for the certificate. */
		public ?string $signature = null,
		/** Status of the certificate activation. */
		public ?\FoundryCo\Cloudflare\Enums\ZoneLevelAuthenticatedOriginPullsGetCertificateDetailsStatus $status = null,
		/** This is the time the certificate was uploaded. */
		public ?\DateTimeImmutable $uploadedOn = null,
		/** Indicates whether zone-level authenticated origin pulls is enabled. */
		public ?bool $enabled = null,
		/** The zone's private key. */
		public ?string $privateKey = null,
	) {
	}
}
