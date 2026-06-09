<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZoneLevelAccessMTLSAuthenticationCertificate
{
	public function __construct(
		/** The hostnames of the applications that will use this certificate. */
		public ?array $associatedHostnames = null,
		public ?\DateTimeImmutable $createdAt = null,
		public ?\DateTimeImmutable $expiresOn = null,
		/** The MD5 fingerprint of the certificate. */
		public ?string $fingerprint = null,
		/** The ID of the application that will use this certificate. */
		public ?array $id = null,
		/** The name of the certificate. */
		public ?string $name = null,
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
