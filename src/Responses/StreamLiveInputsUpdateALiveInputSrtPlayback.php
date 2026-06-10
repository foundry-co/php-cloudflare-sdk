<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Details for playback from an live input using SRT.
 */
readonly class StreamLiveInputsUpdateALiveInputSrtPlayback
{
	public function __construct(
		/** The secret key to use for playback via SRT. */
		public ?string $passphrase = null,
		/** The identifier of the live input to use for playback via SRT. */
		public ?string $streamId = null,
		/** The URL used to play live video over SRT. */
		public ?string $url = null,
	) {
	}
}
