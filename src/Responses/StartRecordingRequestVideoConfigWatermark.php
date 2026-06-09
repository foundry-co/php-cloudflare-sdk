<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Watermark to be added to the recording
 */
readonly class StartRecordingRequestVideoConfigWatermark
{
	public function __construct(
		/** Position of the watermark */
		public ?\FoundryCo\Cloudflare\Enums\StartRecordingRequestVideoConfigWatermarkPosition $position = null,
		/** Size of the watermark */
		public ?StartRecordingRequestVideoConfigWatermarkSize $size = null,
		/** URL of the watermark image */
		public ?string $url = null,
	) {
	}
}
