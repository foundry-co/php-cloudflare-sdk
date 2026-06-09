<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostPresetsRequestPermissions
{
	public function __construct(
		/** Whether this participant can accept waiting requests */
		public bool $acceptWaitingRequests,
		public bool $canAcceptProductionRequests,
		public bool $canChangeParticipantPermissions,
		public bool $canEditDisplayName,
		public bool $canLivestream,
		public bool $canRecord,
		public bool $canSpotlight,
		public PostPresetsRequestPermissionsChat $chat,
		public PostPresetsRequestPermissionsConnectedMeetings $connectedMeetings,
		public bool $disableParticipantAudio,
		public bool $disableParticipantScreensharing,
		public bool $disableParticipantVideo,
		/** Whether this participant is visible to others or not */
		public bool $hiddenParticipant,
		public bool $kickParticipant,
		/** Media permissions */
		public PostPresetsRequestPermissionsMedia $media,
		public bool $pinParticipant,
		/** Plugin permissions */
		public PostPresetsRequestPermissionsPlugins $plugins,
		/** Poll permissions */
		public PostPresetsRequestPermissionsPolls $polls,
		/** Type of the recording peer */
		public \FoundryCo\Cloudflare\Enums\PostPresetsRequestPermissionsRecorderType $recorderType,
		public bool $showParticipantList,
		/** Waiting room type */
		public \FoundryCo\Cloudflare\Enums\PostPresetsRequestPermissionsWaitingRoomType $waitingRoomType,
		public ?bool $acceptStageRequests = null,
		public ?bool $isRecorder = null,
		public ?\FoundryCo\Cloudflare\Enums\PostPresetsRequestPermissionsStageAccess $stageAccess = null,
		public ?bool $stageEnabled = null,
		public ?bool $transcriptionEnabled = null,
	) {
	}
}
