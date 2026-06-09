<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Clip videos given a start and end time
 */
readonly class StreamVideoClippingClipVideosGivenAStartAndEndTimeRequest
{
	public function __construct(
		/** The unique video identifier (UID). */
		public string $clippedFromVideoUID,
		/** Specifies the end time for the video clip in seconds. */
		public int $endTimeSeconds,
		/** Specifies the start time for the video clip in seconds. */
		public int $startTimeSeconds,
		/** Lists the origins allowed to display the video. Enter allowed origin domains in an array and use `*` for wildcard subdomains. Empty arrays allow the video to be viewed on any origin. */
		public ?array $allowedOrigins = null,
		/** A user-defined identifier for the media creator. */
		public ?string $creator = null,
		/** A video's URL. Preferred over 'url'. */
		public ?string $input = null,
		/** A user modifiable key-value store used to reference other systems of record for managing videos. */
		public ?array $meta = null,
		/** A name for the video. */
		public ?string $name = null,
		/** Indicates whether the video can be a accessed using the UID. When set to `true`, a signed token must be generated with a signing key to view the video. */
		public ?bool $requireSignedURLs = null,
		/** Indicates the date and time at which the video will be deleted. Omit the field to indicate no change, or include with a `null` value to remove an existing scheduled deletion. If specified, must be at least 30 days from upload time. */
		public ?\DateTimeImmutable $scheduledDeletion = null,
		/** The timestamp for a thumbnail image calculated as a percentage value of the video's duration. To convert from a second-wise timestamp to a percentage, divide the desired timestamp by the total duration of the video.  If this value is not set, the default thumbnail image is taken from 0s of the video. */
		public ?float $thumbnailTimestampPct = null,
		/** A video's URL (legacy field, use 'input' instead). */
		public ?string $url = null,
		public ?\FoundryCo\Cloudflare\Responses\StreamVideoClippingClipVideosGivenAStartAndEndTimeRequestWatermark $watermark = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'clippedFromVideoUID' => $this->clippedFromVideoUID,
		    'endTimeSeconds' => $this->endTimeSeconds,
		    'startTimeSeconds' => $this->startTimeSeconds,
		    'allowedOrigins' => $this->allowedOrigins,
		    'creator' => $this->creator,
		    'input' => $this->input,
		    'meta' => $this->meta,
		    'name' => $this->name,
		    'requireSignedURLs' => $this->requireSignedURLs,
		    'scheduledDeletion' => $this->scheduledDeletion?->format(\DateTimeImmutable::ATOM),
		    'thumbnailTimestampPct' => $this->thumbnailTimestampPct,
		    'url' => $this->url,
		    'watermark' => $this->watermark?->toArray(),
		], fn ($v) => $v !== null);
	}
}
