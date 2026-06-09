<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class StreamMP4DownloadsDownloadsDefault
{
	public function __construct(
		/** Indicates the progress as a percentage between 0 and 100. */
		public float $percentComplete,
		/** The status of a generated download. */
		public \FoundryCo\Cloudflare\Enums\StreamMP4DownloadsDownloadsDefaultStatus $status,
		/** The URL to access the generated download. */
		public ?string $url = null,
	) {
	}
}
