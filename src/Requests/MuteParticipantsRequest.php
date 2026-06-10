<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Mute participants of an active session
 */
readonly class MuteParticipantsRequest
{
	public function __construct(
		public array $customParticipantIds,
		public array $participantIds,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'custom_participant_ids' => $this->customParticipantIds,
		    'participant_ids' => $this->participantIds,
		], fn ($v) => $v !== null);
	}
}
