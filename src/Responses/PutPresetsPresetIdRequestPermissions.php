<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PutPresetsPresetIdRequestPermissions
{
	public function __construct(
		/** Whether this participant can accept waiting requests */
		public ?bool $acceptWaitingRequests = null,
		public ?bool $canAcceptProductionRequests = null,
		public ?bool $canChangeParticipantPermissions = null,
		public ?bool $canEditDisplayName = null,
		public ?bool $canLivestream = null,
		public ?bool $canRecord = null,
		public ?bool $canSpotlight = null,
		public ?PutPresetsPresetIdRequestPermissionsChat $chat = null,
		public ?PutPresetsPresetIdRequestPermissionsConnectedMeetings $connectedMeetings = null,
		public ?bool $disableParticipantAudio = null,
		public ?bool $disableParticipantScreensharing = null,
		public ?bool $disableParticipantVideo = null,
		/** Whether this participant is visible to others or not */
		public ?bool $hiddenParticipant = null,
		public ?bool $kickParticipant = null,
		/** Media permissions */
		public ?PutPresetsPresetIdRequestPermissionsMedia $media = null,
		public ?bool $pinParticipant = null,
		/** Plugin permissions */
		public ?PutPresetsPresetIdRequestPermissionsPlugins $plugins = null,
		/** Poll permissions */
		public ?PutPresetsPresetIdRequestPermissionsPolls $polls = null,
		/** Type of the recording peer */
		public ?\FoundryCo\Cloudflare\Enums\PutPresetsPresetIdRequestPermissionsRecorderType $recorderType = null,
		public ?bool $showParticipantList = null,
		/** Waiting room type */
		public ?\FoundryCo\Cloudflare\Enums\PutPresetsPresetIdRequestPermissionsWaitingRoomType $waitingRoomType = null,
		public ?bool $acceptStageRequests = null,
		public ?bool $isRecorder = null,
		public ?\FoundryCo\Cloudflare\Enums\PutPresetsPresetIdRequestPermissionsStageAccess $stageAccess = null,
		public ?bool $stageEnabled = null,
		public ?bool $transcriptionEnabled = null,
	) {
	}
}
