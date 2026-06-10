<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class StreamMP4DownloadsListDownloadsDefault
{
	public function __construct(
		/** Indicates the progress as a percentage between 0 and 100. */
		public ?float $percentComplete = null,
		/** The status of a generated download. */
		public ?\FoundryCo\Cloudflare\Enums\StreamMP4DownloadsListDownloadsDefaultStatus $status = null,
		/** The URL to access the generated download. */
		public ?string $url = null,
	) {
	}
}
