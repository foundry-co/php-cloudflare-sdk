<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * AI Search
 */
readonly class AutoragConfigAiSearchRequest
{
	public function __construct(
		public string $query,
		public mixed $filters = null,
		public ?int $maxNumResults = null,
		public mixed $model = null,
		public ?\FoundryCo\Cloudflare\Responses\AutoragConfigAiSearchRequestRankingOptions $rankingOptions = null,
		public ?\FoundryCo\Cloudflare\Responses\AutoragConfigAiSearchRequestReranking $reranking = null,
		public ?bool $rewriteQuery = null,
		public ?bool $stream = null,
		public ?string $systemPrompt = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'query' => $this->query,
		    'filters' => $this->filters,
		    'max_num_results' => $this->maxNumResults,
		    'model' => $this->model,
		    'ranking_options' => $this->rankingOptions?->toArray(),
		    'reranking' => $this->reranking?->toArray(),
		    'rewrite_query' => $this->rewriteQuery,
		    'stream' => $this->stream,
		    'system_prompt' => $this->systemPrompt,
		], fn ($v) => $v !== null);
	}
}
