<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Chat Completions
 */
readonly class AiSearchNamespaceInstanceChatCompletionRequest
{
	public function __construct(
		public array $messages,
		public ?\FoundryCo\Cloudflare\Responses\AiSearchNamespaceInstanceChatCompletionRequestAiSearchOptions $aiSearchOptions = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceInstanceChatCompletionRequestModel $model = null,
		public ?bool $stream = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'messages' => $this->messages,
		    'ai_search_options' => $this->aiSearchOptions?->toArray(),
		    'model' => $this->model?->value,
		    'stream' => $this->stream,
		], fn ($v) => $v !== null);
	}
}
