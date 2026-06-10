<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Media configuration options. eg: Video quality
 */
readonly class PatchPresetsPresetIdRequestConfigMedia
{
	public function __construct(
		/** Control options for Audio quality. */
		public ?PatchPresetsPresetIdRequestConfigMediaAudio $audio = null,
		/** Configuration options for participant screen shares */
		public ?PatchPresetsPresetIdRequestConfigMediaScreenshare $screenshare = null,
		/** Configuration options for participant videos */
		public ?PatchPresetsPresetIdRequestConfigMediaVideo $video = null,
	) {
	}
}
