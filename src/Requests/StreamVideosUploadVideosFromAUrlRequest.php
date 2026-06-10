<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Upload videos from a URL
 */
readonly class StreamVideosUploadVideosFromAUrlRequest
{
	public function __construct(
		/** Lists the origins allowed to display the video. Enter allowed origin domains in an array and use `*` for wildcard subdomains. Empty arrays allow the video to be viewed on any origin. */
		public ?array $allowedOrigins = null,
		/** A user-defined identifier for the media creator. */
		public ?string $creator = null,
		/** A video's URL. The server must be publicly routable and support `HTTP HEAD` requests and `HTTP GET` range requests. The server should respond to `HTTP HEAD` requests with a `content-range` header that includes the size of the file. This is the preferred field over `url`. */
		public ?string $input = null,
		/** A user modifiable key-value store used to reference other systems of record for managing videos. */
		public ?array $meta = null,
		/** A video's name. Used for legacy compatibility. */
		public ?string $name = null,
		/** Indicates whether the video can be a accessed using the UID. When set to `true`, a signed token must be generated with a signing key to view the video. */
		public ?bool $requireSignedURLs = null,
		/** Indicates the date and time at which the video will be deleted. Omit the field to indicate no change, or include with a `null` value to remove an existing scheduled deletion. If specified, must be at least 30 days from upload time. */
		public ?\DateTimeImmutable $scheduledDeletion = null,
		/** The timestamp for a thumbnail image calculated as a percentage value of the video's duration. To convert from a second-wise timestamp to a percentage, divide the desired timestamp by the total duration of the video.  If this value is not set, the default thumbnail image is taken from 0s of the video. */
		public ?float $thumbnailTimestampPct = null,
		/** A video's URL. The server must be publicly routable and support `HTTP HEAD` requests and `HTTP GET` range requests. The server should respond to `HTTP HEAD` requests with a `content-range` header that includes the size of the file. This field is deprecated in favor of `input`. */
		public ?string $url = null,
		public ?\FoundryCo\Cloudflare\Responses\StreamVideosUploadVideosFromAUrlRequestWatermark $watermark = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
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
