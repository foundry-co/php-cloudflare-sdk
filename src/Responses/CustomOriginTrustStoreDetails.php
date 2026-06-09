<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CustomOriginTrustStoreDetails
{
	public function __construct(
		/** The root CA certificate in PEM format. Only root CA certificates are accepted; intermediate and leaf certificates are not supported. */
		public string $certificate,
		/** When the certificate expires. */
		public \DateTimeImmutable $expiresOn,
		/** Identifier. */
		public string $id,
		/** The certificate authority that issued the certificate. */
		public string $issuer,
		/** The type of hash used for the certificate. */
		public string $signature,
		/** Status of the zone's custom SSL. */
		public \FoundryCo\Cloudflare\Enums\CustomOriginTrustStoreDetailsStatus $status,
		/** When the certificate was last modified. */
		public \DateTimeImmutable $updatedAt,
		/** When the certificate was uploaded to Cloudflare. */
		public \DateTimeImmutable $uploadedOn,
	) {
	}
}
