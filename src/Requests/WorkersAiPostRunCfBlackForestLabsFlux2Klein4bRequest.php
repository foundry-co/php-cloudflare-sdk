<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Execute @cf/black-forest-labs/flux-2-klein-4b model.
 */
readonly class WorkersAiPostRunCfBlackForestLabsFlux2Klein4bRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Responses\WorkersAiPostRunCfBlackForestLabsFlux2Klein4bRequestMultipart $multipart,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'multipart' => $this->multipart->toArray(),
		], fn ($v) => $v !== null);
	}
}
