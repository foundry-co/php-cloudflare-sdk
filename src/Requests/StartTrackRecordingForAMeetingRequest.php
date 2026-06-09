<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Start recording participant audio tracks
 */
readonly class StartTrackRecordingForAMeetingRequest
{
	public function __construct(
		/** ID of the meeting to record. */
		public string $meetingId,
		/** Optional audio layer configuration. If omitted, RealtimeKit records all participant audio using the default file name prefix. */
		public ?array $layers = null,
		/** Optional list of participant user IDs to record. Selective track recording (`user_ids`) is in early beta contact support to use this feature. */
		public ?array $userIds = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'meeting_id' => $this->meetingId,
		    'layers' => $this->layers,
		    'user_ids' => $this->userIds,
		], fn ($v) => $v !== null);
	}
}
