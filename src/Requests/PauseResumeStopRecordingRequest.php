<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Pause/Resume/Stop recording
 */
readonly class PauseResumeStopRecordingRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Enums\PauseResumeStopRecordingRequestAction $action,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'action' => $this->action->value,
		], fn ($v) => $v !== null);
	}
}
