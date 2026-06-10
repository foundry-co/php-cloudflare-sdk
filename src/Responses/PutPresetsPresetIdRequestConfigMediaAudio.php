<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Control options for Audio quality.
 */
readonly class PutPresetsPresetIdRequestConfigMediaAudio
{
	public function __construct(
		/** Enable High Quality Audio for your meetings */
		public ?bool $enableHighBitrate = null,
		/** Enable Stereo for your meetings */
		public ?bool $enableStereo = null,
	) {
	}
}
