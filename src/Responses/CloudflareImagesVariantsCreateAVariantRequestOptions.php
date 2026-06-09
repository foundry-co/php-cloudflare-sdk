<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Allows you to define image resizing sizes for different use cases.
 */
readonly class CloudflareImagesVariantsCreateAVariantRequestOptions
{
	public function __construct(
		/** The fit property describes how the width and height dimensions should be interpreted. */
		public \FoundryCo\Cloudflare\Enums\CloudflareImagesVariantsCreateAVariantRequestOptionsFit $fit,
		/** Maximum height in image pixels. */
		public float $height,
		/** What EXIF data should be preserved in the output image. */
		public \FoundryCo\Cloudflare\Enums\CloudflareImagesVariantsCreateAVariantRequestOptionsMetadata $metadata,
		/** Maximum width in image pixels. */
		public float $width,
	) {
	}
}
