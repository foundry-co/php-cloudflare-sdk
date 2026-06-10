<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update CSAM Scanner setting
 */
readonly class CsamScannerUpdateSettingRequest
{
	public function __construct(
		/** The feature identifier. */
		public ?\FoundryCo\Cloudflare\Enums\CsamScannerUpdateSettingRequestId $id = null,
		/**
		 * Writable CSAM Scanner feature configuration values.
		 */
		public ?\FoundryCo\Cloudflare\Responses\CsamScannerUpdateSettingRequestValue $value = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'id' => $this->id?->value,
		    'value' => $this->value?->toArray(),
		], fn ($v) => $v !== null);
	}
}
