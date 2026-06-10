<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Details for streaming to a live input using WebRTC.
 */
readonly class StreamLiveInputsCreateALiveInputWebRTC
{
	public function __construct(
		/** The WebRTC URL you provide to the broadcaster, which they stream live video to. */
		public ?string $url = null,
	) {
	}
}
