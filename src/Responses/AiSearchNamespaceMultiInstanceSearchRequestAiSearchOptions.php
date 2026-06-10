<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchNamespaceMultiInstanceSearchRequestAiSearchOptions
{
	public function __construct(
		public ?array $instanceIds = null,
		public ?AiSearchNamespaceMultiInstanceSearchRequestAiSearchOptionsCache $cache = null,
		public ?AiSearchNamespaceMultiInstanceSearchRequestAiSearchOptionsQueryRewrite $queryRewrite = null,
		public ?AiSearchNamespaceMultiInstanceSearchRequestAiSearchOptionsReranking $reranking = null,
		public ?AiSearchNamespaceMultiInstanceSearchRequestAiSearchOptionsRetrieval $retrieval = null,
	) {
	}
}
