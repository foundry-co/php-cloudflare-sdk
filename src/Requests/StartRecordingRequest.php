<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Start recording a meeting
 */
readonly class StartRecordingRequest
{
	public function __construct(
		/** By default, a meeting allows only one recording to run at a time. Enabling the `allow_multiple_recordings` parameter to true allows you to initiate multiple recordings concurrently in the same meeting. This allows you to record separate videos of the same meeting with different configurations, such as portrait mode or landscape mode. */
		public ?bool $allowMultipleRecordings = null,
		/** Object containing configuration regarding the audio that is being recorded. */
		public ?\FoundryCo\Cloudflare\Responses\StartRecordingRequestAudioConfig $audioConfig = null,
		/** Update the recording file name. */
		public ?string $fileNamePrefix = null,
		/** Allows you to add timed metadata to your recordings, which are digital markers inserted into a video file to provide contextual information at specific points in the content range. The ID3 tags containing this information are available to clients on the playback timeline in HLS format. The output files are generated in a compressed .tar format. */
		public ?\FoundryCo\Cloudflare\Responses\StartRecordingRequestInteractiveConfig $interactiveConfig = null,
		/** Specifies the maximum duration for recording in seconds, ranging from a minimum of 60 seconds to a maximum of 24 hours. */
		public ?int $maxSeconds = null,
		/** ID of the meeting to record. */
		public ?string $meetingId = null,
		public ?\FoundryCo\Cloudflare\Responses\StartRecordingRequestRealtimekitBucketConfig $realtimekitBucketConfig = null,
		public ?\FoundryCo\Cloudflare\Responses\StartRecordingRequestRtmpOutConfig $rtmpOutConfig = null,
		public ?\FoundryCo\Cloudflare\Responses\StartRecordingRequestStorageConfig $storageConfig = null,
		/** Pass a custom url to record arbitary screen */
		public ?string $url = null,
		public ?\FoundryCo\Cloudflare\Responses\StartRecordingRequestVideoConfig $videoConfig = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'allow_multiple_recordings' => $this->allowMultipleRecordings,
		    'audio_config' => $this->audioConfig?->toArray(),
		    'file_name_prefix' => $this->fileNamePrefix,
		    'interactive_config' => $this->interactiveConfig?->toArray(),
		    'max_seconds' => $this->maxSeconds,
		    'meeting_id' => $this->meetingId,
		    'realtimekit_bucket_config' => $this->realtimekitBucketConfig?->toArray(),
		    'rtmp_out_config' => $this->rtmpOutConfig?->toArray(),
		    'storage_config' => $this->storageConfig?->toArray(),
		    'url' => $this->url,
		    'video_config' => $this->videoConfig?->toArray(),
		], fn ($v) => $v !== null);
	}
}
