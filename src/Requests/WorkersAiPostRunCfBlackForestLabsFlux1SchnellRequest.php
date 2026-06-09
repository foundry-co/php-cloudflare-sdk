<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Execute @cf/black-forest-labs/flux-1-schnell model.
 */
readonly class WorkersAiPostRunCfBlackForestLabsFlux1SchnellRequest
{
	public function __construct(
		/** A text description of the image you want to generate. */
		public string $prompt,
		/** The number of diffusion steps; higher values can improve quality but take longer. */
		public ?int $steps = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'prompt' => $this->prompt,
		    'steps' => $this->steps,
		], fn ($v) => $v !== null);
	}
}
