<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update indicator feed metadata
 */
readonly class CustomIndicatorFeedsUpdateIndicatorFeedMetadataRequest
{
	public function __construct(
		/** The new description of the feed */
		public ?string $description = null,
		/** The new is_attributable value of the feed */
		public ?bool $isAttributable = null,
		/** The new is_downloadable value of the feed */
		public ?bool $isDownloadable = null,
		/** The new is_public value of the feed */
		public ?bool $isPublic = null,
		/** The new name of the feed */
		public ?string $name = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		    'is_attributable' => $this->isAttributable,
		    'is_downloadable' => $this->isDownloadable,
		    'is_public' => $this->isPublic,
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
