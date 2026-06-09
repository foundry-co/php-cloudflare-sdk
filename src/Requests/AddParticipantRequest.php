<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Add a participant
 */
readonly class AddParticipantRequest
{
	public function __construct(
		/** A unique participant ID. You must specify a unique ID for the participant, for example, UUID, email address, and so on. */
		public string $customParticipantId,
		/** Name of the preset to apply to this participant. */
		public string $presetName,
		/** (Optional) Name of the participant. */
		public ?string $name = null,
		/** (Optional) A URL to a picture to be used for the participant. */
		public ?string $picture = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'custom_participant_id' => $this->customParticipantId,
		    'preset_name' => $this->presetName,
		    'name' => $this->name,
		    'picture' => $this->picture,
		], fn ($v) => $v !== null);
	}
}
