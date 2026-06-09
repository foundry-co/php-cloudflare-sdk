<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class StreamVideosDetailsInput
{
	public function __construct(
		/** The video height in pixels. A value of `-1` means the height is unknown. The value becomes available after the upload and before the video is ready. */
		public ?int $height = null,
		/** The video width in pixels. A value of `-1` means the width is unknown. The value becomes available after the upload and before the video is ready. */
		public ?int $width = null,
	) {
	}
}
