<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchNamespaceMultiInstanceChatCompletionRequestAiSearchOptions
{
	public function __construct(
		public ?array $instanceIds = null,
		public ?AiSearchNamespaceMultiInstanceChatCompletionRequestAiSearchOptionsCache $cache = null,
		public ?AiSearchNamespaceMultiInstanceChatCompletionRequestAiSearchOptionsQueryRewrite $queryRewrite = null,
		public ?AiSearchNamespaceMultiInstanceChatCompletionRequestAiSearchOptionsReranking $reranking = null,
		public ?AiSearchNamespaceMultiInstanceChatCompletionRequestAiSearchOptionsRetrieval $retrieval = null,
	) {
	}
}
