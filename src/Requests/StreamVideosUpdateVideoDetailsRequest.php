<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Edit video details
 */
readonly class StreamVideosUpdateVideoDetailsRequest
{
	public function __construct(
		/** Lists the origins allowed to display the video. Enter allowed origin domains in an array and use `*` for wildcard subdomains. Empty arrays allow the video to be viewed on any origin. */
		public ?array $allowedOrigins = null,
		/** A user-defined identifier for the media creator. */
		public ?string $creator = null,
		/** The maximum duration in seconds for a video upload. Can be set for a video that is not yet uploaded to limit its duration. Uploads that exceed the specified duration will fail during processing. A value of `-1` means the value is unknown. */
		public ?int $maxDurationSeconds = null,
		/** A user modifiable key-value store used to reference other systems of record for managing videos. */
		public ?array $meta = null,
		/** Public details for the video including title, share link, channel link, and logo. */
		public ?\FoundryCo\Cloudflare\Responses\StreamVideosUpdateVideoDetailsRequestPublicDetails $publicDetails = null,
		/** Indicates whether the video can be a accessed using the UID. When set to `true`, a signed token must be generated with a signing key to view the video. */
		public ?bool $requireSignedURLs = null,
		/** Indicates the date and time at which the video will be deleted. Omit the field to indicate no change, or include with a `null` value to remove an existing scheduled deletion. If specified, must be at least 30 days from upload time. */
		public ?\DateTimeImmutable $scheduledDeletion = null,
		/** The timestamp for a thumbnail image calculated as a percentage value of the video's duration. To convert from a second-wise timestamp to a percentage, divide the desired timestamp by the total duration of the video.  If this value is not set, the default thumbnail image is taken from 0s of the video. */
		public ?float $thumbnailTimestampPct = null,
		/** The unique identifier for the video. Can be used to verify the video being updated. */
		public ?string $uid = null,
		/** The date and time when the video upload URL is no longer valid for direct user uploads. */
		public ?\DateTimeImmutable $uploadExpiry = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'allowedOrigins' => $this->allowedOrigins,
		    'creator' => $this->creator,
		    'maxDurationSeconds' => $this->maxDurationSeconds,
		    'meta' => $this->meta,
		    'publicDetails' => $this->publicDetails?->toArray(),
		    'requireSignedURLs' => $this->requireSignedURLs,
		    'scheduledDeletion' => $this->scheduledDeletion?->format(\DateTimeImmutable::ATOM),
		    'thumbnailTimestampPct' => $this->thumbnailTimestampPct,
		    'uid' => $this->uid,
		    'uploadExpiry' => $this->uploadExpiry?->format(\DateTimeImmutable::ATOM),
		], fn ($v) => $v !== null);
	}
}
