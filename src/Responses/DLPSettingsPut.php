<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DLPSettingsPut
{
	public function __construct(
		public \DateTimeImmutable $updatedAt,
		public mixed $maskingLevel = null,
		/** Base64-encoded public key for encrypting payload logs. Null when payload logging is disabled. */
		public ?string $publicKey = null,
	) {
	}
}
