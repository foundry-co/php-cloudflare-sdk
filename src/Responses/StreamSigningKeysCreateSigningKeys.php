<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class StreamSigningKeysCreateSigningKeys
{
	public function __construct(
		/** The date and time a signing key was created. */
		public ?\DateTimeImmutable $created = null,
		/** Identifier. */
		public ?string $id = null,
		/** The signing key in JWK format. */
		public ?string $jwk = null,
		/** The signing key in PEM format. */
		public ?string $pem = null,
	) {
	}
}
