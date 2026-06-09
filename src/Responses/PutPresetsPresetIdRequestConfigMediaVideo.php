<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configuration options for participant videos
 */
readonly class PutPresetsPresetIdRequestConfigMediaVideo
{
	public function __construct(
		/** Frame rate of participants' video */
		public float $frameRate,
		/** Video quality of participants */
		public \FoundryCo\Cloudflare\Enums\PutPresetsPresetIdRequestConfigMediaVideoQuality $quality,
		/** Enable simulcast for participant videos. */
		public ?bool $simulcast = null,
	) {
	}
}
