<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Execute @cf/ai4bharat/nonomni-indictrans2-en-indic-1b model.
 */
readonly class WorkersAiPostRunCfAi4bharatNonomniIndictrans2EnIndic1bRequest
{
	public function __construct(
		/** Target langauge to translate to */
		public \FoundryCo\Cloudflare\Enums\WorkersAiPostRunCfAi4bharatNonomniIndictrans2EnIndic1bRequestTargetLanguage $targetLanguage,
		/** Input text to translate. Can be a single string or a list of strings. */
		public mixed $text,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'target_language' => $this->targetLanguage->value,
		    'text' => $this->text,
		], fn ($v) => $v !== null);
	}
}
