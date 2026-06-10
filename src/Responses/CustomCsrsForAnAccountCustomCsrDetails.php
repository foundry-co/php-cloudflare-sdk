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
readonly class CustomCsrsForAnAccountCustomCsrDetails
{
	public function __construct(
		/** When the CSR was created. */
		public ?\DateTimeImmutable $createdAt = null,
		/** Custom CSR identifier tag. */
		public ?string $id = null,
		/** The key algorithm used to generate the CSR. */
		public ?\FoundryCo\Cloudflare\Enums\CustomCsrsForAnAccountCustomCsrDetailsKeyType $keyType = null,
		/** Account identifier associated with this CSR. */
		public ?string $accountTag = null,
		/** The common name (domain) for the CSR. */
		public ?string $commonName = null,
		/** Two-letter ISO 3166-1 alpha-2 country code. */
		public ?string $country = null,
		/** The PEM-encoded Certificate Signing Request. */
		public ?string $csr = null,
		/** Optional description for the CSR. */
		public ?string $description = null,
		/** City or locality name. */
		public ?string $locality = null,
		/** Human-readable name for the CSR. */
		public ?string $name = null,
		/** Organization name. */
		public ?string $organization = null,
		/** Organizational unit name. */
		public ?string $organizationalUnit = null,
		/** Subject Alternative Names included in the CSR. */
		public ?array $sans = null,
		/** State or province name. */
		public ?string $state = null,
	) {
	}
}
