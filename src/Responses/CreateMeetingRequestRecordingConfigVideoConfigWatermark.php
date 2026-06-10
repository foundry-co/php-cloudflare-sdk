<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Watermark to be added to the recording
 */
readonly class CreateMeetingRequestRecordingConfigVideoConfigWatermark
{
	public function __construct(
		/** Position of the watermark */
		public ?\FoundryCo\Cloudflare\Enums\CreateMeetingRequestRecordingConfigVideoConfigWatermarkPosition $position = null,
		/** Size of the watermark */
		public ?CreateMeetingRequestRecordingConfigVideoConfigWatermarkSize $size = null,
		/** URL of the watermark image */
		public ?string $url = null,
	) {
	}
}
