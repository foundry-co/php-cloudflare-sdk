<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a meeting
 */
readonly class UpdateMeetingRequest
{
	public function __construct(
		/** The AI Config allows you to customize the behavior of meeting transcriptions and summaries */
		public ?\FoundryCo\Cloudflare\Responses\UpdateMeetingRequestAiConfig $aiConfig = null,
		/** Specifies if the meeting should start getting livestreamed on start. */
		public ?bool $liveStreamOnStart = null,
		/** If a meeting is updated to persist_chat, meeting chat would remain for a week within the meeting space. */
		public ?bool $persistChat = null,
		/** Specifies if the meeting should start getting recorded as soon as someone joins the meeting. */
		public ?bool $recordOnStart = null,
		/**
		 * Recording Configurations to be used for this meeting. This level of configs takes higher preference over App level configs on the RealtimeKit developer portal.
		 */
		public ?\FoundryCo\Cloudflare\Responses\UpdateMeetingRequestRecordingConfig $recordingConfig = null,
		/** Time in seconds, for which a session remains active, after the last participant has left the meeting. */
		public ?float $sessionKeepAliveTimeInSecs = null,
		/** Whether the meeting is `ACTIVE` or `INACTIVE`. Users will not be able to join an `INACTIVE` meeting. */
		public ?\FoundryCo\Cloudflare\Enums\UpdateMeetingRequestStatus $status = null,
		/** Automatically generate summary of meetings using transcripts. Requires Transcriptions to be enabled, and can be retrieved via Webhooks or summary API. */
		public ?bool $summarizeOnEnd = null,
		/** Title of the meeting */
		public ?string $title = null,
		/** Automatically generate transcripts when the meeting ends. */
		public ?bool $transcribeOnEnd = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'ai_config' => $this->aiConfig?->toArray(),
		    'live_stream_on_start' => $this->liveStreamOnStart,
		    'persist_chat' => $this->persistChat,
		    'record_on_start' => $this->recordOnStart,
		    'recording_config' => $this->recordingConfig?->toArray(),
		    'session_keep_alive_time_in_secs' => $this->sessionKeepAliveTimeInSecs,
		    'status' => $this->status?->value,
		    'summarize_on_end' => $this->summarizeOnEnd,
		    'title' => $this->title,
		    'transcribe_on_end' => $this->transcribeOnEnd,
		], fn ($v) => $v !== null);
	}
}
