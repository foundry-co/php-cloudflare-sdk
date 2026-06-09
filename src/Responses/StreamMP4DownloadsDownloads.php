<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * An object with download type keys. Each key is optional and only present if that download type has been created.
 */
readonly class StreamMP4DownloadsDownloads
{
	public function __construct(
		/** The audio-only download. Only present if this download type has been created. */
		public ?StreamMP4DownloadsDownloadsAudio $audio = null,
		/** The default video download. Only present if this download type has been created. */
		public ?StreamMP4DownloadsDownloadsDefault $default = null,
	) {
	}
}
