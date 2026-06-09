<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Details for streaming to a live input using SRT.
 */
readonly class StreamLiveInputsInputSrt
{
	public function __construct(
		/** The secret key to use when streaming via SRT to a live input. */
		public ?string $passphrase = null,
		/** The identifier of the live input to use when streaming via SRT. */
		public ?string $streamId = null,
		/** The SRT URL you provide to the broadcaster, which they stream live video to. */
		public ?string $url = null,
	) {
	}
}
