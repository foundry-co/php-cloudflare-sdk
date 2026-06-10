<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Records the input to a Cloudflare Stream video. Behavior depends on the mode. In most cases, the video will initially be viewable as a live video and transition to on-demand after a condition is satisfied.
 */
readonly class StreamLiveInputsUpdateALiveInputRecording
{
	public function __construct(
		/** Lists the origins allowed to display videos created with this input. Enter allowed origin domains in an array and use `*` for wildcard subdomains. An empty array allows videos to be viewed on any origin. */
		public ?array $allowedOrigins = null,
		/** Disables reporting the number of live viewers when this property is set to `true`. */
		public ?bool $hideLiveViewerCount = null,
		/** Specifies the recording behavior for the live input. Set this value to `off` to prevent a recording. Set the value to `automatic` to begin a recording and transition to on-demand after Stream Live stops receiving input. */
		public ?\FoundryCo\Cloudflare\Enums\StreamLiveInputsUpdateALiveInputRecordingMode $mode = null,
		/** Indicates if a video using the live input has the `requireSignedURLs` property set. Also enforces access controls on any video recording of the livestream with the live input. */
		public ?bool $requireSignedURLs = null,
		/** Determines the amount of time a live input configured in `automatic` mode should wait before a recording transitions from live to on-demand. `0` is recommended for most use cases and indicates the platform default should be used. */
		public ?int $timeoutSeconds = null,
	) {
	}
}
