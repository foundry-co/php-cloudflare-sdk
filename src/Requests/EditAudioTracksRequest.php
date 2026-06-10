<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Edit additional audio tracks on a video
 */
readonly class EditAudioTracksRequest
{
	public function __construct(
		/** Denotes whether the audio track will be played by default in a player. */
		public ?bool $default = null,
		/** A string to uniquely identify the track amongst other audio track labels for the specified video. */
		public ?string $label = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'default' => $this->default,
		    'label' => $this->label,
		], fn ($v) => $v !== null);
	}
}
