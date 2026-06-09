<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class StreamVideosLs
{
	public function __construct(
		/** Indicates the date and time at which the video will be deleted. Omit the field to indicate no change, or include with a `null` value to remove an existing scheduled deletion. If specified, must be at least 30 days from upload time. */
		public ?\DateTimeImmutable $scheduledDeletion = null,
		/** A Cloudflare-generated unique identifier for a media item. */
		public ?string $uid = null,
		/** The URL an unauthenticated upload can use for a single `HTTP POST multipart/form-data` request. */
		public ?string $uploadURL = null,
		public ?StreamVideosLsWatermark $watermark = null,
	) {
	}
}
