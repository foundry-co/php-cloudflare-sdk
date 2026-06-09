<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Execute @cf/meta/llama-guard-3-8b model.
 */
readonly class WorkersAiPostRunCfMetaLlamaGuard38bRequest
{
	public function __construct(
		/** An array of message objects representing the conversation history. */
		public array $messages,
		/** The maximum number of tokens to generate in the response. */
		public ?int $maxTokens = null,
		/** Dictate the output format of the generated response. */
		public ?\FoundryCo\Cloudflare\Responses\WorkersAiPostRunCfMetaLlamaGuard38bRequestResponseFormat $responseFormat = null,
		/** Controls the randomness of the output; higher values produce more random results. */
		public ?float $temperature = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'messages' => $this->messages,
		    'max_tokens' => $this->maxTokens,
		    'response_format' => $this->responseFormat?->toArray(),
		    'temperature' => $this->temperature,
		], fn ($v) => $v !== null);
	}
}
