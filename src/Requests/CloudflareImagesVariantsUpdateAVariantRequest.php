<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a variant
 */
readonly class CloudflareImagesVariantsUpdateAVariantRequest
{
	public function __construct(
		/** Allows you to define image resizing sizes for different use cases. */
		public \FoundryCo\Cloudflare\Responses\CloudflareImagesVariantsUpdateAVariantRequestOptions $options,
		/** Indicates whether the variant can access an image without a signature, regardless of image access control. */
		public ?bool $neverRequireSignedURLs = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'options' => $this->options->toArray(),
		    'neverRequireSignedURLs' => $this->neverRequireSignedURLs,
		], fn ($v) => $v !== null);
	}
}
