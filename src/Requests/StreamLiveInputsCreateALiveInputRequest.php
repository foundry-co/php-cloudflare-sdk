<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a live input
 */
readonly class StreamLiveInputsCreateALiveInputRequest
{
	public function __construct(
		/** Sets the creator ID asssociated with this live input. */
		public ?string $defaultCreator = null,
		/** Indicates the number of days after which the live inputs recordings will be deleted. When a stream completes and the recording is ready, the value is used to calculate a scheduled deletion date for that recording. Omit the field to indicate no change, or include with a `null` value to remove an existing scheduled deletion. */
		public ?float $deleteRecordingAfterDays = null,
		/** Indicates whether the live input is enabled and can accept streams. */
		public ?bool $enabled = null,
		/** A user modifiable key-value store used to reference other systems of record for managing live inputs. */
		public ?array $meta = null,
		/** Records the input to a Cloudflare Stream video. Behavior depends on the mode. In most cases, the video will initially be viewable as a live video and transition to on-demand after a condition is satisfied. */
		public ?\FoundryCo\Cloudflare\Responses\StreamLiveInputsCreateALiveInputRequestRecording $recording = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'defaultCreator' => $this->defaultCreator,
		    'deleteRecordingAfterDays' => $this->deleteRecordingAfterDays,
		    'enabled' => $this->enabled,
		    'meta' => $this->meta,
		    'recording' => $this->recording?->toArray(),
		], fn ($v) => $v !== null);
	}
}
