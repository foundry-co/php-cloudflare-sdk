<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Details for playback from a live input using WebRTC.
 */
readonly class StreamLiveInputsUpdateALiveInputWebRTCPlayback
{
	public function __construct(
		/** The URL used to play live video over WebRTC. */
		public ?string $url = null,
	) {
	}
}
