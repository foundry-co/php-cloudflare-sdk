<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configuration options for participant screen shares
 */
readonly class PatchPresetsPresetIdRequestConfigMediaScreenshare
{
	public function __construct(
		/** Frame rate of screen share */
		public ?float $frameRate = null,
		/** Quality of screen share */
		public ?\FoundryCo\Cloudflare\Enums\PatchPresetsPresetIdRequestConfigMediaScreenshareQuality $quality = null,
	) {
	}
}
