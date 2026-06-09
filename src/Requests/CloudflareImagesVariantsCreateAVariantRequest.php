<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a variant
 */
readonly class CloudflareImagesVariantsCreateAVariantRequest
{
	public function __construct(
		public string $id,
		/** Allows you to define image resizing sizes for different use cases. */
		public \FoundryCo\Cloudflare\Responses\CloudflareImagesVariantsCreateAVariantRequestOptions $options,
		/** Indicates whether the variant can access an image without a signature, regardless of image access control. */
		public ?bool $neverRequireSignedURLs = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'id' => $this->id,
		    'options' => $this->options->toArray(),
		    'neverRequireSignedURLs' => $this->neverRequireSignedURLs,
		], fn ($v) => $v !== null);
	}
}
