<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Execute @cf/huggingface/distilbert-sst-2-int8 model.
 */
readonly class WorkersAiPostRunCfHuggingfaceDistilbertSst2Int8Request
{
	public function __construct(
		/** The text that you want to classify */
		public string $text,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'text' => $this->text,
		], fn ($v) => $v !== null);
	}
}
