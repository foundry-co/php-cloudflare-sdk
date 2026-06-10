<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * An object with download type keys. Each key is optional and only present if that download type has been created.
 */
readonly class StreamDownloadsCreateTypeSpecificDownloads
{
	public function __construct(
		/** The audio-only download. Only present if this download type has been created. */
		public ?StreamDownloadsCreateTypeSpecificDownloadsAudio $audio = null,
		/** The default video download. Only present if this download type has been created. */
		public ?StreamDownloadsCreateTypeSpecificDownloadsDefault $default = null,
	) {
	}
}
