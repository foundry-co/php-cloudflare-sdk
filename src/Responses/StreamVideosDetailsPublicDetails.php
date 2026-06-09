<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Public details for the video including title, share link, channel link, and logo.
 */
readonly class StreamVideosDetailsPublicDetails
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
