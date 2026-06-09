<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Multi-Instance Chat Completions
 */
readonly class AiSearchNamespaceMultiInstanceChatCompletionRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Responses\AiSearchNamespaceMultiInstanceChatCompletionRequestAiSearchOptions $aiSearchOptions,
		public array $messages,
		public mixed $model = null,
		public ?bool $stream = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'ai_search_options' => $this->aiSearchOptions->toArray(),
		    'messages' => $this->messages,
		    'model' => $this->model,
		    'stream' => $this->stream,
		], fn ($v) => $v !== null);
	}
}
