<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Media permissions
 */
readonly class PutPresetsPresetIdRequestPermissionsMedia
{
	public function __construct(
		/** Audio permissions */
		public PutPresetsPresetIdRequestPermissionsMediaAudio $audio,
		/** Screenshare permissions */
		public PutPresetsPresetIdRequestPermissionsMediaScreenshare $screenshare,
		/** Video permissions */
		public PutPresetsPresetIdRequestPermissionsMediaVideo $video,
	) {
	}
}
