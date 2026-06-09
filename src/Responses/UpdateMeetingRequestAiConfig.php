<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The AI Config allows you to customize the behavior of meeting transcriptions and summaries
 */
readonly class UpdateMeetingRequestAiConfig
{
	public function __construct(
		/** Summary Config */
		public ?UpdateMeetingRequestAiConfigSummarization $summarization = null,
		/** Transcription Configurations */
		public ?UpdateMeetingRequestAiConfigTranscription $transcription = null,
	) {
	}
}
