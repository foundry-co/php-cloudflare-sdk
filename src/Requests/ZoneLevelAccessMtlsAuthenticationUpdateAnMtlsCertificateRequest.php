<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update an mTLS certificate
 */
readonly class ZoneLevelAccessMtlsAuthenticationUpdateAnMtlsCertificateRequest
{
	public function __construct(
		/** The hostnames of the applications that will use this certificate. */
		public array $associatedHostnames,
		/** The name of the certificate. */
		public ?string $name = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'associated_hostnames' => $this->associatedHostnames,
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
