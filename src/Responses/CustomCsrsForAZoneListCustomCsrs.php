<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * A custom Certificate Signing Request (CSR).
 */
readonly class CustomCsrsForAZoneListCustomCsrs
{
	public function __construct(
		/** When the CSR was created. */
		public ?\DateTimeImmutable $createdAt = null,
		/** Custom CSR identifier tag. */
		public ?string $id = null,
		/** The key algorithm used to generate the CSR. */
		public ?\FoundryCo\Cloudflare\Enums\CustomCsrsForAZoneListCustomCsrsKeyType $keyType = null,
		/** The common name (domain) for the CSR. */
		public ?string $commonName = null,
		/** Two-letter ISO 3166-1 alpha-2 country code. */
		public ?string $country = null,
		/** The PEM-encoded Certificate Signing Request. */
		public ?string $csr = null,
		/** City or locality name. */
		public ?string $locality = null,
		/** Organization name. */
		public ?string $organization = null,
		/** Organizational unit for the CSR subject. */
		public ?string $organizationalUnit = null,
		/** Subject Alternative Names included in the CSR. */
		public ?array $sans = null,
		/** State or province name. */
		public ?string $state = null,
	) {
	}
}
