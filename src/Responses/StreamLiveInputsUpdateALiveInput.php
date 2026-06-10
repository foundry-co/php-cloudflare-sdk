<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Details about a live input.
 */
readonly class StreamLiveInputsUpdateALiveInput
{
	public function __construct(
		/** The date and time the live input was created. */
		public ?\DateTimeImmutable $created = null,
		/** Indicates the number of days after which the live inputs recordings will be deleted. When a stream completes and the recording is ready, the value is used to calculate a scheduled deletion date for that recording. Omit the field to indicate no change, or include with a `null` value to remove an existing scheduled deletion. */
		public ?float $deleteRecordingAfterDays = null,
		/** Indicates whether the live input is enabled and can accept streams. */
		public ?bool $enabled = null,
		/** A user modifiable key-value store used to reference other systems of record for managing live inputs. */
		public ?array $meta = null,
		/** The date and time the live input was last modified. */
		public ?\DateTimeImmutable $modified = null,
		/** Records the input to a Cloudflare Stream video. Behavior depends on the mode. In most cases, the video will initially be viewable as a live video and transition to on-demand after a condition is satisfied. */
		public ?StreamLiveInputsUpdateALiveInputRecording $recording = null,
		/** Details for streaming to an live input using RTMPS. */
		public ?StreamLiveInputsUpdateALiveInputRtmps $rtmps = null,
		/** Details for playback from an live input using RTMPS. */
		public ?StreamLiveInputsUpdateALiveInputRtmpsPlayback $rtmpsPlayback = null,
		/** Details for streaming to a live input using SRT. */
		public ?StreamLiveInputsUpdateALiveInputSrt $srt = null,
		/** Details for playback from an live input using SRT. */
		public ?StreamLiveInputsUpdateALiveInputSrtPlayback $srtPlayback = null,
		/** The connection status of a live input. */
		public ?\FoundryCo\Cloudflare\Enums\StreamLiveInputsUpdateALiveInputStatus $status = null,
		/** A unique identifier for a live input. */
		public ?string $uid = null,
		/** Details for streaming to a live input using WebRTC. */
		public ?StreamLiveInputsUpdateALiveInputWebRTC $webRTC = null,
		/** Details for playback from a live input using WebRTC. */
		public ?StreamLiveInputsUpdateALiveInputWebRTCPlayback $webRTCPlayback = null,
	) {
	}
}
