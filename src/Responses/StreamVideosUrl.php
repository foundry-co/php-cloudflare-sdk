<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class StreamVideosUrl
{
	public function __construct(
		/** Lists the origins allowed to display the video. Enter allowed origin domains in an array and use `*` for wildcard subdomains. Empty arrays allow the video to be viewed on any origin. */
		public ?array $allowedOrigins = null,
		/** The unique identifier of the source video this video was clipped from. */
		public ?string $clippedFrom = null,
		/** The date and time the media item was created. */
		public ?\DateTimeImmutable $created = null,
		/** A user-defined identifier for the media creator. */
		public ?string $creator = null,
		/** The duration of the video in seconds. A value of `-1` means the duration is unknown. The duration becomes available after the upload and before the video is ready. */
		public ?float $duration = null,
		public ?StreamVideosUrlInput $input = null,
		/** The live input ID used to upload a video with Stream Live. */
		public ?string $liveInput = null,
		/** The maximum duration in seconds for a video upload. Can be set for a video that is not yet uploaded to limit its duration. Uploads that exceed the specified duration will fail during processing. A value of `-1` means the value is unknown. */
		public ?int $maxDurationSeconds = null,
		/** The maximum size in bytes for the video upload. */
		public ?int $maxSizeBytes = null,
		/** A user modifiable key-value store used to reference other systems of record for managing videos. */
		public ?array $meta = null,
		/** The date and time the media item was last modified. */
		public ?\DateTimeImmutable $modified = null,
		public ?StreamVideosUrlPlayback $playback = null,
		/** The video's preview page URI. This field is omitted until encoding is complete. */
		public ?string $preview = null,
		/** Public details for the video including title, share link, channel link, and logo. */
		public ?StreamVideosUrlPublicDetails $publicDetails = null,
		/** Indicates whether the video is playable. The field is empty if the video is not ready for viewing or the live stream is still in progress. */
		public ?bool $readyToStream = null,
		/** Indicates the time at which the video became playable. The field is empty if the video is not ready for viewing or the live stream is still in progress. */
		public ?\DateTimeImmutable $readyToStreamAt = null,
		/** Indicates whether the video can be a accessed using the UID. When set to `true`, a signed token must be generated with a signing key to view the video. */
		public ?bool $requireSignedURLs = null,
		/** Indicates the date and time at which the video will be deleted. Omit the field to indicate no change, or include with a `null` value to remove an existing scheduled deletion. If specified, must be at least 30 days from upload time. */
		public ?\DateTimeImmutable $scheduledDeletion = null,
		/** The size of the media item in bytes. */
		public ?float $size = null,
		/** Specifies a detailed status for a video. If the `state` is `inprogress` or `error`, the `step` field returns `encoding` or `manifest`. If the `state` is `inprogress`, `pctComplete` returns a number between 0 and 100 to indicate the approximate percent of completion. If the `state` is `error`, `errorReasonCode` and `errorReasonText` provide additional details. */
		public ?StreamVideosUrlStatus $status = null,
		/** The media item's thumbnail URI. This field is omitted until encoding is complete. */
		public ?string $thumbnail = null,
		/** The timestamp for a thumbnail image calculated as a percentage value of the video's duration. To convert from a second-wise timestamp to a percentage, divide the desired timestamp by the total duration of the video.  If this value is not set, the default thumbnail image is taken from 0s of the video. */
		public ?float $thumbnailTimestampPct = null,
		/** A Cloudflare-generated unique identifier for a media item. */
		public ?string $uid = null,
		/** The date and time when the video upload URL is no longer valid for direct user uploads. */
		public ?\DateTimeImmutable $uploadExpiry = null,
		/** The date and time the media item was uploaded. */
		public ?\DateTimeImmutable $uploaded = null,
		public ?StreamVideosUrlWatermark $watermark = null,
	) {
	}
}
