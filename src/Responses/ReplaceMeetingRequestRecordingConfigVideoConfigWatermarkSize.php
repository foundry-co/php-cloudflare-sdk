<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Size of the watermark
 */
readonly class ReplaceMeetingRequestRecordingConfigVideoConfigWatermarkSize
{
	public function __construct(
		/** Height of the watermark in px */
		public ?int $height = null,
		/** Width of the watermark in px */
		public ?int $width = null,
	) {
	}
}
