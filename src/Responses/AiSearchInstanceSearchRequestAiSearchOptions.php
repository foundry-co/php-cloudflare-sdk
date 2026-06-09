<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchInstanceSearchRequestAiSearchOptions
{
	public function __construct(
		public ?AiSearchInstanceSearchRequestAiSearchOptionsCache $cache = null,
		public ?AiSearchInstanceSearchRequestAiSearchOptionsQueryRewrite $queryRewrite = null,
		public ?AiSearchInstanceSearchRequestAiSearchOptionsReranking $reranking = null,
		public ?AiSearchInstanceSearchRequestAiSearchOptionsRetrieval $retrieval = null,
	) {
	}
}
