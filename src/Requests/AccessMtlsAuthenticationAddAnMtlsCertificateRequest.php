<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Add an mTLS certificate
 */
readonly class AccessMtlsAuthenticationAddAnMtlsCertificateRequest
{
	public function __construct(
		/** The certificate content. */
		public string $certificate,
		/** The name of the certificate. */
		public string $name,
		/** The hostnames of the applications that will use this certificate. */
		public ?array $associatedHostnames = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'certificate' => $this->certificate,
		    'name' => $this->name,
		    'associated_hostnames' => $this->associatedHostnames,
		], fn ($v) => $v !== null);
	}
}
