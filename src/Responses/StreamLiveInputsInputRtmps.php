<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Details for streaming to an live input using RTMPS.
 */
readonly class StreamLiveInputsInputRtmps
{
	public function __construct(
		/** The secret key to use when streaming via RTMPS to a live input. */
		public ?string $streamKey = null,
		/** The RTMPS URL you provide to the broadcaster, which they stream live video to. */
		public ?string $url = null,
	) {
	}
}
