<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The AI Config allows you to customize the behavior of meeting transcriptions and summaries
 */
readonly class CreateMeetingRequestAiConfig
{
	public function __construct(
		/** Summary Config */
		public ?CreateMeetingRequestAiConfigSummarization $summarization = null,
		/** Transcription Configurations */
		public ?CreateMeetingRequestAiConfigTranscription $transcription = null,
	) {
	}
}
