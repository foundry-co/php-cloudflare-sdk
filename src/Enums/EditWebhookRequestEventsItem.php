<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum EditWebhookRequestEventsItem: string
{
	case MeetingStarted = 'meeting.started';
	case MeetingEnded = 'meeting.ended';
	case MeetingParticipantJoined = 'meeting.participantJoined';
	case MeetingParticipantLeft = 'meeting.participantLeft';
	case RecordingStatusUpdate = 'recording.statusUpdate';
	case LivestreamingStatusUpdate = 'livestreaming.statusUpdate';
	case MeetingChatSynced = 'meeting.chatSynced';
	case MeetingTranscript = 'meeting.transcript';
	case MeetingSummary = 'meeting.summary';
}
