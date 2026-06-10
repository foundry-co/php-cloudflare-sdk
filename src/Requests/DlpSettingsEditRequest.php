<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Partially update DLP account-level settings.
 */
readonly class DlpSettingsEditRequest
{
	public function __construct(
		/** Whether AI context analysis is enabled at the account level. */
		public ?bool $aiContextAnalysis = null,
		/** Whether OCR is enabled at the account level. */
		public ?bool $ocr = null,
		public ?\FoundryCo\Cloudflare\Responses\DlpSettingsEditRequestPayloadLogging $payloadLogging = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'ai_context_analysis' => $this->aiContextAnalysis,
		    'ocr' => $this->ocr,
		    'payload_logging' => $this->payloadLogging?->toArray(),
		], fn ($v) => $v !== null);
	}
}
