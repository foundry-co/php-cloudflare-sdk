<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessMTLSAuthenticationCertificates
{
	public function __construct(
		/** The hostnames of the applications that will use this certificate. */
		public ?array $associatedHostnames = null,
		public mixed $createdAt = null,
		public ?\DateTimeImmutable $expiresOn = null,
		/** The MD5 fingerprint of the certificate. */
		public ?string $fingerprint = null,
		/** The ID of the application that will use this certificate. */
		public ?string $id = null,
		/** The name of the certificate. */
		public ?string $name = null,
		public mixed $updatedAt = null,
	) {
	}
}
