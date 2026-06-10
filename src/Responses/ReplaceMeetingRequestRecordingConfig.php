<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Recording Configurations to be used for this meeting. This level of configs takes higher preference over App level configs on the RealtimeKit developer portal.
 */
readonly class ReplaceMeetingRequestRecordingConfig
{
	public function __construct(
		/** Object containing configuration regarding the audio that is being recorded. */
		public ?ReplaceMeetingRequestRecordingConfigAudioConfig $audioConfig = null,
		/** Adds a prefix to the beginning of the file name of the recording. */
		public ?string $fileNamePrefix = null,
		public ?ReplaceMeetingRequestRecordingConfigLiveStreamingConfig $liveStreamingConfig = null,
		/** Specifies the maximum duration for recording in seconds, ranging from a minimum of 60 seconds to a maximum of 24 hours. */
		public ?float $maxSeconds = null,
		public ?ReplaceMeetingRequestRecordingConfigRealtimekitBucketConfig $realtimekitBucketConfig = null,
		public ?ReplaceMeetingRequestRecordingConfigStorageConfig $storageConfig = null,
		public ?ReplaceMeetingRequestRecordingConfigVideoConfig $videoConfig = null,
	) {
	}
}
