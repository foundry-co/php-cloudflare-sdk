<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Execute @cf/ai4bharat/indictrans2-en-indic-1B model.
 */
readonly class WorkersAiPostRunCfAi4bharatIndictrans2EnIndic1BRequest
{
	public function __construct(
		/** Target langauge to translate to */
		public \FoundryCo\Cloudflare\Enums\WorkersAiPostRunCfAi4bharatIndictrans2EnIndic1BRequestTargetLanguage $targetLanguage,
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
