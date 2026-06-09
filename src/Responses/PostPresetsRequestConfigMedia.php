<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Media configuration options. eg: Video quality
 */
readonly class PostPresetsRequestConfigMedia
{
	public function __construct(
		/** Configuration options for participant screen shares */
		public PostPresetsRequestConfigMediaScreenshare $screenshare,
		/** Configuration options for participant videos */
		public PostPresetsRequestConfigMediaVideo $video,
		/** Control options for Audio quality. */
		public ?PostPresetsRequestConfigMediaAudio $audio = null,
	) {
	}
}
