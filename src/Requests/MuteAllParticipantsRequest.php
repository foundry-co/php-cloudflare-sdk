<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Mute all participants
 */
readonly class MuteAllParticipantsRequest
{
	public function __construct(
		/** if false, participants won't be able to unmute themselves after they are muted */
		public bool $allowUnmute,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'allow_unmute' => $this->allowUnmute,
		], fn ($v) => $v !== null);
	}
}
