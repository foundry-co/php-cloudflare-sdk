<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * An individual certificate within a certificate pack.
 */
readonly class CertificatePacksListCertificatePacksCertificatesItem
{
	public function __construct(
		/** Hostnames covered by this certificate. */
		public ?array $hosts = null,
		/** Certificate identifier. */
		public ?string $id = null,
		/** Certificate status. */
		public ?string $status = null,
		/** Certificate bundle method. */
		public ?string $bundleMethod = null,
		/** When the certificate from the authority expires. */
		public ?\DateTimeImmutable $expiresOn = null,
		/** Specify the region where your private key can be held locally. */
		public ?CertificatePacksListCertificatePacksCertificatesItemGeoRestrictions $geoRestrictions = null,
		/** The certificate authority that issued the certificate. */
		public ?string $issuer = null,
		/** When the certificate was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** The order/priority in which the certificate will be used. */
		public ?float $priority = null,
		/** The type of hash used for the certificate. */
		public ?string $signature = null,
		/** When the certificate was uploaded to Cloudflare. */
		public ?\DateTimeImmutable $uploadedOn = null,
		/** Identifier. */
		public ?string $zoneId = null,
	) {
	}
}
