<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Start livestreaming a meeting
 */
readonly class StartLivestreamingRequest
{
	public function __construct(
		public ?string $name = null,
		public ?\FoundryCo\Cloudflare\Responses\StartLivestreamingRequestVideoConfig $videoConfig = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'video_config' => $this->videoConfig?->toArray(),
		], fn ($v) => $v !== null);
	}
}
