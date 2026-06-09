<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class BrapiScrapeResults
{
	public function __construct(
		public array $attributes,
		/** Element height. */
		public float $height,
		/** HTML content. */
		public string $html,
		/** Element left. */
		public float $left,
		/** Text content. */
		public string $text,
		/** Element top. */
		public float $top,
		/** Element width. */
		public float $width,
	) {
	}
}
