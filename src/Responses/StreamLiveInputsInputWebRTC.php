<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Details for streaming to a live input using WebRTC.
 */
readonly class StreamLiveInputsInputWebRTC
{
	public function __construct(
		/** The WebRTC URL you provide to the broadcaster, which they stream live video to. */
		public ?string $url = null,
	) {
	}
}
