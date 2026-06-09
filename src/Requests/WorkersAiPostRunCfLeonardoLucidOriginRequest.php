<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Execute @cf/leonardo/lucid-origin model.
 */
readonly class WorkersAiPostRunCfLeonardoLucidOriginRequest
{
	public function __construct(
		/** A text description of the image you want to generate. */
		public string $prompt,
		/** Controls how closely the generated image should adhere to the prompt; higher values make the image more aligned with the prompt */
		public ?float $guidance = null,
		/** The height of the generated image in pixels */
		public ?int $height = null,
		/** The number of diffusion steps; higher values can improve quality but take longer */
		public ?int $numSteps = null,
		/** Random seed for reproducibility of the image generation */
		public ?int $seed = null,
		/** The number of diffusion steps; higher values can improve quality but take longer */
		public ?int $steps = null,
		/** The width of the generated image in pixels */
		public ?int $width = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'prompt' => $this->prompt,
		    'guidance' => $this->guidance,
		    'height' => $this->height,
		    'num_steps' => $this->numSteps,
		    'seed' => $this->seed,
		    'steps' => $this->steps,
		    'width' => $this->width,
		], fn ($v) => $v !== null);
	}
}
