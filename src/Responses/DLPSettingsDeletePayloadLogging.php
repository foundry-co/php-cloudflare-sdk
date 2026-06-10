<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DlpSettingsDeletePayloadLogging
{
	public function __construct(
		public ?\DateTimeImmutable $updatedAt = null,
		public mixed $maskingLevel = null,
		/** Base64-encoded public key for encrypting payload logs. Null when payload logging is disabled. */
		public ?string $publicKey = null,
	) {
	}
}
