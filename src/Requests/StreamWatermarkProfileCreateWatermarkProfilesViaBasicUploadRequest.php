<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create watermark profiles via basic upload
 */
readonly class StreamWatermarkProfileCreateWatermarkProfilesViaBasicUploadRequest
{
	public function __construct(
		/** A short description of the watermark profile. */
		public ?string $name = null,
		/** The translucency of the image. A value of `0.0` makes the image completely transparent, and `1.0` makes the image completely opaque. Note that if the image is already semi-transparent, setting this to `1.0` will not make the image completely opaque. */
		public ?float $opacity = null,
		/** The whitespace between the adjacent edges (determined by position) of the video and the image. `0.0` indicates no padding, and `1.0` indicates a fully padded video width or length, as determined by the algorithm. */
		public ?float $padding = null,
		/** The location of the image. Valid positions are: `upperRight`, `upperLeft`, `lowerLeft`, `lowerRight`, and `center`. Note that `center` ignores the `padding` parameter. */
		public ?string $position = null,
		/** The size of the image relative to the overall size of the video. This parameter will adapt to horizontal and vertical videos automatically. `0.0` indicates no scaling (use the size of the image as-is), and `1.0 `fills the entire video. */
		public ?float $scale = null,
		/** URL of the watermark image to copy. */
		public ?string $url = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'opacity' => $this->opacity,
		    'padding' => $this->padding,
		    'position' => $this->position,
		    'scale' => $this->scale,
		    'url' => $this->url,
		], fn ($v) => $v !== null);
	}
}
