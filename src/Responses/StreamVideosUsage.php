<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class StreamVideosUsage
{
	public function __construct(
		/** A user-defined identifier for the media creator. */
		public ?string $creator = null,
		/** The total minutes of video content stored in the account. May contain decimal values. */
		public ?float $totalStorageMinutes = null,
		/** The storage capacity alloted for the account. */
		public ?int $totalStorageMinutesLimit = null,
		/** The total count of videos associated with the account. */
		public ?int $videoCount = null,
	) {
	}
}
