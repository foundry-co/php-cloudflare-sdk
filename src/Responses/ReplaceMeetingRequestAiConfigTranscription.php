<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Transcription Configurations
 */
readonly class ReplaceMeetingRequestAiConfigTranscription
{
	public function __construct(
		/** Adds specific terms to improve accurate detection during transcription. */
		public ?array $keywords = null,
		/** Specifies the language code for transcription to ensure accurate results. */
		public ?\FoundryCo\Cloudflare\Enums\ReplaceMeetingRequestAiConfigTranscriptionLanguage $language = null,
		/** Control the inclusion of offensive language in transcriptions. */
		public ?bool $profanityFilter = null,
	) {
	}
}
