<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Execute @cf/huggingface/nonomni-distilbert-sst-2-int8 model.
 */
readonly class WorkersAiPostRunCfHuggingfaceNonomniDistilbertSst2Int8Request
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
