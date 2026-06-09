<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Search scanned images
 */
readonly class PostSearchLogoSimilarityRequest
{
	public function __construct(
		/** Base64 encoded image data. Can include data URI prefix (e.g., 'data:image/png;base64,...') or just the base64 string. */
		public string $imageData,
		/** Minimum similarity score threshold for matches (0-1, default: 0) */
		public ?float $scoreThreshold = null,
		/** Number of closest matches to return (1-100, default: 10) */
		public ?int $topK = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'image_data' => $this->imageData,
		    'score_threshold' => $this->scoreThreshold,
		    'top_k' => $this->topK,
		], fn ($v) => $v !== null);
	}
}
