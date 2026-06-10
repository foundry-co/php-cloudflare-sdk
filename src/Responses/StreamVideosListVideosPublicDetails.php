<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Public details for the video including title, share link, channel link, and logo.
 */
readonly class StreamVideosListVideosPublicDetails
{
	public function __construct(
		public ?string $channelLink = null,
		public ?string $logo = null,
		public ?int $mediaId = null,
		public ?string $shareLink = null,
		public ?string $title = null,
	) {
	}
}
