<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Maximum number of streams that are visible on a device
 */
readonly class PostPresetsRequestConfigMaxVideoStreams
{
	public function __construct(
		/** Maximum number of video streams visible on desktop devices */
		public ?float $desktop = null,
		/** Maximum number of streams visible on mobile devices */
		public ?float $mobile = null,
	) {
	}
}
