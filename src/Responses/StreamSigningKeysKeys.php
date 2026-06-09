<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class StreamSigningKeysKeys
{
	public function __construct(
		/** The date and time a signing key was created. */
		public ?\DateTimeImmutable $created = null,
		/** Identifier. */
		public ?string $id = null,
		/** The unique identifier for the signing key. */
		public ?string $keyId = null,
	) {
	}
}
