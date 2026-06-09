<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ReplaceMeetingRequestRecordingConfigVideoConfig
{
	public function __construct(
		/** Codec using which the recording will be encoded. */
		public ?\FoundryCo\Cloudflare\Enums\ReplaceMeetingRequestRecordingConfigVideoConfigCodec $codec = null,
		/** Controls whether to export video file seperately */
		public ?bool $exportFile = null,
		/** Height of the recording video in pixels */
		public ?int $height = null,
		/** Watermark to be added to the recording */
		public ?ReplaceMeetingRequestRecordingConfigVideoConfigWatermark $watermark = null,
		/** Width of the recording video in pixels */
		public ?int $width = null,
	) {
	}
}
