<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DnssecListDnssecZsksSigningKey
{
	public function __construct(
		/** Key encryption key name used to encrypt the private key. */
		public ?string $kek = null,
		/** Encrypted private key material for the signing key. */
		public ?string $privkey = null,
		/** Public key content associated with the signing key. */
		public ?string $pubkey = null,
	) {
	}
}
