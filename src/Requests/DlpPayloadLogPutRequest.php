<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Set payload log settings
 */
readonly class DlpPayloadLogPutRequest
{
	public function __construct(
		public mixed $maskingLevel = null,
		/**
		 * Base64-encoded public key for encrypting payload logs.
		 *
		 * - Set to null or empty string to disable payload logging.
		 * - Set to a non-empty base64 string to enable payload logging with the given key.
		 *
		 * For customers with configurable payload masking feature rolled out:
		 * - If the field is missing, the existing setting will be kept. Note that this is different from setting to null or empty string.
		 *
		 * For all other customers:
		 * - If the field is missing, the existing setting will be cleared.
		 */
		public ?string $publicKey = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'masking_level' => $this->maskingLevel,
		    'public_key' => $this->publicKey,
		], fn ($v) => $v !== null);
	}
}
