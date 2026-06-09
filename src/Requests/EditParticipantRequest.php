<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Edit a participant's detail
 */
readonly class EditParticipantRequest
{
	public function __construct(
		/** (Optional) Name of the participant. */
		public ?string $name = null,
		/** (Optional) A URL to a picture to be used for the participant. */
		public ?string $picture = null,
		/** (Optional) Name of the preset to apply to this participant. */
		public ?string $presetName = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'picture' => $this->picture,
		    'preset_name' => $this->presetName,
		], fn ($v) => $v !== null);
	}
}
