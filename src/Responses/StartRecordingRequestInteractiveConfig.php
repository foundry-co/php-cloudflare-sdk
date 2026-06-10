<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Allows you to add timed metadata to your recordings, which are digital markers inserted into a video file to provide contextual information at specific points in the content range. The ID3 tags containing this information are available to clients on the playback timeline in HLS format. The output files are generated in a compressed .tar format.
 */
readonly class StartRecordingRequestInteractiveConfig
{
	public function __construct(
		/** The metadata is presented in the form of ID3 tags. */
		public ?\FoundryCo\Cloudflare\Enums\StartRecordingRequestInteractiveConfigType $type = null,
	) {
	}
}
