<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Execute @cf/stabilityai/stable-diffusion-xl-base-1.0 model.
 */
readonly class WorkersAiPostRunCfStabilityaiStableDiffusionXlBase10Request
{
	public function __construct(
		/** A text description of the image you want to generate */
		public string $prompt,
		/** Controls how closely the generated image should adhere to the prompt; higher values make the image more aligned with the prompt */
		public ?float $guidance = null,
		/** The height of the generated image in pixels */
		public ?int $height = null,
		/** For use with img2img tasks. An array of integers that represent the image data constrained to 8-bit unsigned integer values */
		public ?array $image = null,
		/** For use with img2img tasks. A base64-encoded string of the input image */
		public ?string $imageB64 = null,
		/** An array representing An array of integers that represent mask image data for inpainting constrained to 8-bit unsigned integer values */
		public ?array $mask = null,
		/** Text describing elements to avoid in the generated image */
		public ?string $negativePrompt = null,
		/** The number of diffusion steps; higher values can improve quality but take longer */
		public ?int $numSteps = null,
		/** Random seed for reproducibility of the image generation */
		public ?int $seed = null,
		/** A value between 0 and 1 indicating how strongly to apply the transformation during img2img tasks; lower values make the output closer to the input image */
		public ?float $strength = null,
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
		    'image' => $this->image,
		    'image_b64' => $this->imageB64,
		    'mask' => $this->mask,
		    'negative_prompt' => $this->negativePrompt,
		    'num_steps' => $this->numSteps,
		    'seed' => $this->seed,
		    'strength' => $this->strength,
		    'width' => $this->width,
		], fn ($v) => $v !== null);
	}
}
