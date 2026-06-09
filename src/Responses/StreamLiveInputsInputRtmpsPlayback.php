<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Details for playback from an live input using RTMPS.
 */
readonly class StreamLiveInputsInputRtmpsPlayback
{
	public function __construct(
		/** The secret key to use for playback via RTMPS. */
		public ?string $streamKey = null,
		/** The URL used to play live video over RTMPS. */
		public ?string $url = null,
	) {
	}
}
