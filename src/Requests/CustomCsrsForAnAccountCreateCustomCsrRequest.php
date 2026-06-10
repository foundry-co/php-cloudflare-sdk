<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Custom CSR
 */
readonly class CustomCsrsForAnAccountCreateCustomCsrRequest
{
	public function __construct(
		/** The common name (domain) for the CSR. Must be at most 64 characters. */
		public string $commonName,
		/** Two-letter ISO 3166-1 alpha-2 country code. */
		public string $country,
		/** City or locality name. */
		public string $locality,
		/** Organization name. */
		public string $organization,
		/** Subject Alternative Names for the CSR. At least one SAN is required. */
		public array $sans,
		/** State or province name. */
		public string $state,
		/** Optional description for the CSR. */
		public ?string $description = null,
		/** Key algorithm to use for the CSR. Defaults to rsa2048 if not specified. */
		public ?\FoundryCo\Cloudflare\Enums\CustomCsrsForAnAccountCreateCustomCsrRequestKeyType $keyType = null,
		/** Human-readable name for the CSR. */
		public ?string $name = null,
		/** Organizational unit name. */
		public ?string $organizationalUnit = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'common_name' => $this->commonName,
		    'country' => $this->country,
		    'locality' => $this->locality,
		    'organization' => $this->organization,
		    'sans' => $this->sans,
		    'state' => $this->state,
		    'description' => $this->description,
		    'key_type' => $this->keyType?->value,
		    'name' => $this->name,
		    'organizational_unit' => $this->organizationalUnit,
		], fn ($v) => $v !== null);
	}
}
