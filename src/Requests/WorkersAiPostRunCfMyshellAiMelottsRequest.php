<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Execute @cf/myshell-ai/melotts model.
 */
readonly class WorkersAiPostRunCfMyshellAiMelottsRequest
{
	public function __construct(
		/** A text description of the audio you want to generate */
		public string $prompt,
		/** The speech language (e.g., 'en' for English, 'fr' for French). Defaults to 'en' if not specified */
		public ?string $lang = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'prompt' => $this->prompt,
		    'lang' => $this->lang,
		], fn ($v) => $v !== null);
	}
}
