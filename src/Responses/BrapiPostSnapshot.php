<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class BrapiPostSnapshot
{
	public function __construct(
		/** Accessibility tree node */
		public ?BrapiPostSnapshotAccessibilityTree $accessibilityTree = null,
		/** HTML content. */
		public ?string $content = null,
		/** Markdown content. */
		public ?string $markdown = null,
		/** Base64 encoded image. */
		public ?string $screenshot = null,
	) {
	}
}
