<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Writable CSAM Scanner feature configuration values.
 */
readonly class CsamScannerUpdateSettingRequestValue
{
	public function __construct(
		/**
		 * Notification email address for CSAM scan results. When changed,
		 * email verification is triggered automatically.
		 */
		public ?string $email = null,
		/** Whether CSAM scanning is enabled for this zone. */
		public ?bool $enabled = null,
		/**
		 * Set to true to trigger re-sending the email verification.
		 * Write-only; never appears in responses (omitted when false).
		 */
		public ?bool $resendEmail = null,
		/** Map of scanning sources and their enabled state. */
		public ?array $sources = null,
	) {
	}
}
