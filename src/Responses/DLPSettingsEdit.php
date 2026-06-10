<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * DLP account-level settings response.
 */
readonly class DlpSettingsEdit
{
	public function __construct(
		/** Whether AI context analysis is enabled at the account level. */
		public ?bool $aiContextAnalysis = null,
		/** Whether OCR is enabled at the account level. */
		public ?bool $ocr = null,
		public ?DlpSettingsEditPayloadLogging $payloadLogging = null,
	) {
	}
}
