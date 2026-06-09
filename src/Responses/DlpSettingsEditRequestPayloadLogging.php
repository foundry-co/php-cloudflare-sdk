<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DlpSettingsEditRequestPayloadLogging
{
	public function __construct(
		public mixed $maskingLevel = null,
		/**
		 * Base64-encoded public key for encrypting payload logs.
		 *
		 * - Set to a non-empty base64 string to enable payload logging with the given key.
		 * - Set to an empty string to disable payload logging.
		 * - Omit or set to null to leave unchanged (PATCH) or reset to disabled (PUT).
		 */
		public ?string $publicKey = null,
	) {
	}
}
