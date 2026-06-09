<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Replace a participant's detail
 */
readonly class ReplaceParticipantRequest
{
	public function __construct(
		/** Unique participant ID accepted by the replace participant API. */
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
