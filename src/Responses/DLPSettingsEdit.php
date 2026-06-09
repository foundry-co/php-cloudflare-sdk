<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * DLP account-level settings response.
 */
readonly class DLPSettingsEdit
{
	public function __construct(
		/** Whether AI context analysis is enabled at the account level. */
		public bool $aiContextAnalysis,
		/** Whether OCR is enabled at the account level. */
		public bool $ocr,
		public DLPSettingsEditPayloadLogging $payloadLogging,
	) {
	}
}
