<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CustomOriginTrustStoreDetails
{
	public function __construct(
		/** The root CA certificate in PEM format. Only root CA certificates are accepted; intermediate and leaf certificates are not supported. */
		public ?string $certificate = null,
		/** When the certificate expires. */
		public ?\DateTimeImmutable $expiresOn = null,
		/** Identifier. */
		public ?string $id = null,
		/** The certificate authority that issued the certificate. */
		public ?string $issuer = null,
		/** The type of hash used for the certificate. */
		public ?string $signature = null,
		/** Status of the zone's custom SSL. */
		public ?\FoundryCo\Cloudflare\Enums\CustomOriginTrustStoreDetailsStatus $status = null,
		/** When the certificate was last modified. */
		public ?\DateTimeImmutable $updatedAt = null,
		/** When the certificate was uploaded to Cloudflare. */
		public ?\DateTimeImmutable $uploadedOn = null,
	) {
	}
}
