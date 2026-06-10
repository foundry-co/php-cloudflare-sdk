<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Specifies a detailed status for a video. If the `state` is `inprogress` or `error`, the `step` field returns `encoding` or `manifest`. If the `state` is `inprogress`, `pctComplete` returns a number between 0 and 100 to indicate the approximate percent of completion. If the `state` is `error`, `errorReasonCode` and `errorReasonText` provide additional details.
 */
readonly class StreamVideosUploadVideosFromAUrlStatus
{
	public function __construct(
		/** Specifies why the video failed to encode. This field is empty if the video is not in an `error` state. Preferred for programmatic use. */
		public ?string $errorReasonCode = null,
		/** Specifies why the video failed to encode using a human readable error message in English. This field is empty if the video is not in an `error` state. */
		public ?string $errorReasonText = null,
		/** Indicates the progress as a percentage between 0 and 100. */
		public ?string $pctComplete = null,
		/** Specifies the processing status for all quality levels for a video. */
		public ?\FoundryCo\Cloudflare\Enums\StreamVideosUploadVideosFromAUrlStatusState $state = null,
	) {
	}
}
