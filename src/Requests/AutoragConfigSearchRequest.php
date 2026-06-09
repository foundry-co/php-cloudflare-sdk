<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Search
 */
readonly class AutoragConfigSearchRequest
{
	public function __construct(
		public string $query,
		public mixed $filters = null,
		public ?int $maxNumResults = null,
		public ?\FoundryCo\Cloudflare\Responses\AutoragConfigSearchRequestRankingOptions $rankingOptions = null,
		public ?\FoundryCo\Cloudflare\Responses\AutoragConfigSearchRequestReranking $reranking = null,
		public ?bool $rewriteQuery = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'query' => $this->query,
		    'filters' => $this->filters,
		    'max_num_results' => $this->maxNumResults,
		    'ranking_options' => $this->rankingOptions?->toArray(),
		    'reranking' => $this->reranking?->toArray(),
		    'rewrite_query' => $this->rewriteQuery,
		], fn ($v) => $v !== null);
	}
}
