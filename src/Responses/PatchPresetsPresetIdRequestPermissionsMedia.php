<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Media permissions
 */
readonly class PatchPresetsPresetIdRequestPermissionsMedia
{
	public function __construct(
		/** Audio permissions */
		public ?PatchPresetsPresetIdRequestPermissionsMediaAudio $audio = null,
		/** Screenshare permissions */
		public ?PatchPresetsPresetIdRequestPermissionsMediaScreenshare $screenshare = null,
		/** Video permissions */
		public ?PatchPresetsPresetIdRequestPermissionsMediaVideo $video = null,
	) {
	}
}
