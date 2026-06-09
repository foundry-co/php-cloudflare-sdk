<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class StreamAudioTracksTracksAudioItem
{
	public function __construct(
		/** Denotes whether the audio track will be played by default in a player. */
		public ?bool $default = null,
		/** A string to uniquely identify the track amongst other audio track labels for the specified video. */
		public ?string $label = null,
		/** Specifies the processing status of the video. */
		public ?\FoundryCo\Cloudflare\Enums\StreamAudioTracksTracksAudioItemStatus $status = null,
		/** A Cloudflare-generated unique identifier for a media item. */
		public ?string $uid = null,
	) {
	}
}
