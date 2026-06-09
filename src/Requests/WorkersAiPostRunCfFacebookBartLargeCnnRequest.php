<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Execute @cf/facebook/bart-large-cnn model.
 */
readonly class WorkersAiPostRunCfFacebookBartLargeCnnRequest
{
	public function __construct(
		/** The text that you want the model to summarize */
		public string $inputText,
		/** The maximum length of the generated summary in tokens */
		public ?int $maxLength = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'input_text' => $this->inputText,
		    'max_length' => $this->maxLength,
		], fn ($v) => $v !== null);
	}
}
