<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class StreamSubtitlesCaptionsListCaptionsOrSubtitles
{
	public function __construct(
		/** Whether the caption was generated via AI. */
		public ?bool $generated = null,
		/** The language label displayed in the native language to users. */
		public ?string $label = null,
		/** The language tag in BCP 47 format. */
		public ?string $language = null,
		/** The status of a generated caption. */
		public ?\FoundryCo\Cloudflare\Enums\StreamSubtitlesCaptionsListCaptionsOrSubtitlesStatus $status = null,
	) {
	}
}
