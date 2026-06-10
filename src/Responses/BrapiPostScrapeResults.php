<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class BrapiPostScrapeResults
{
	public function __construct(
		public ?array $attributes = null,
		/** Element height. */
		public ?float $height = null,
		/** HTML content. */
		public ?string $html = null,
		/** Element left. */
		public ?float $left = null,
		/** Text content. */
		public ?string $text = null,
		/** Element top. */
		public ?float $top = null,
		/** Element width. */
		public ?float $width = null,
	) {
	}
}
