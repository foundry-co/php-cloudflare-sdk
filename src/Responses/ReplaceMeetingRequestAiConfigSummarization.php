<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Summary Config
 */
readonly class ReplaceMeetingRequestAiConfigSummarization
{
	public function __construct(
		/** Defines the style of the summary, such as general, team meeting, or sales call. */
		public ?\FoundryCo\Cloudflare\Enums\ReplaceMeetingRequestAiConfigSummarizationSummaryType $summaryType = null,
		/** Determines the text format of the summary, such as plain text or markdown. */
		public ?\FoundryCo\Cloudflare\Enums\ReplaceMeetingRequestAiConfigSummarizationTextFormat $textFormat = null,
		/** Sets the maximum number of words in the meeting summary. */
		public ?int $wordLimit = null,
	) {
	}
}
