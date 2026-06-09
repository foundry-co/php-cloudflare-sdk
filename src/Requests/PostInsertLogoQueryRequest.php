<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Insert logo query
 */
readonly class PostInsertLogoQueryRequest
{
	public function __construct(
		/** Base64 encoded image data. Can include data URI prefix (e.g., 'data:image/png;base64,...') or just the base64 string. */
		public string $imageData,
		/** Minimum similarity score (0-1) required for visual matches */
		public float $similarityThreshold,
		/** Unique identifier for the logo query */
		public string $tag,
		/** If true, search historic scanned images for matches above the similarity threshold */
		public ?bool $searchLookback = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'image_data' => $this->imageData,
		    'similarity_threshold' => $this->similarityThreshold,
		    'tag' => $this->tag,
		    'search_lookback' => $this->searchLookback,
		], fn ($v) => $v !== null);
	}
}
