<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Execute AI Model (Generic)
 */
readonly class WorkersAiPostRunGenericRequest
{
	public function __construct(
		/** Model-specific input data. Format varies by model type. */
		public array $input,
		/** The AI model to execute (e.g., openai/gpt-5.5, anthropic/claude-opus-4.7) */
		public string $model,
		public ?\FoundryCo\Cloudflare\Responses\WorkersAiPostRunGenericRequestOptions $options = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'input' => $this->input,
		    'model' => $this->model,
		    'options' => $this->options?->toArray(),
		], fn ($v) => $v !== null);
	}
}
