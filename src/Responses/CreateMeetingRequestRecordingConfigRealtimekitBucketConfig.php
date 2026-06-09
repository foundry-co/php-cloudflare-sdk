<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CreateMeetingRequestRecordingConfigRealtimekitBucketConfig
{
	public function __construct(
		/** Controls whether recordings are uploaded to RealtimeKit's bucket. If set to false, `download_url`, `audio_download_url`, `download_url_expiry` won't be generated for a recording. */
		public bool $enabled,
	) {
	}
}
