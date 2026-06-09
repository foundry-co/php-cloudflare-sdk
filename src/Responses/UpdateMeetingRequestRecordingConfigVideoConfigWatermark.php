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
readonly class UpdateMeetingRequestRecordingConfigVideoConfigWatermark
{
	public function __construct(
		/** Position of the watermark */
		public ?\FoundryCo\Cloudflare\Enums\UpdateMeetingRequestRecordingConfigVideoConfigWatermarkPosition $position = null,
		/** Size of the watermark */
		public ?UpdateMeetingRequestRecordingConfigVideoConfigWatermarkSize $size = null,
		/** URL of the watermark image */
		public ?string $url = null,
	) {
	}
}
