<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchNamespaceMultiInstanceSearchRequestAiSearchOptionsRetrieval
{
	public function __construct(
		/** Metadata fields to boost search results by. Overrides the instance-level boost_by config. Direction defaults to 'asc' for numeric/datetime fields, 'exists' for text/boolean fields. Fields must match 'timestamp' or a defined custom_metadata field. */
		public ?array $boostBy = null,
		public ?int $contextExpansion = null,
		public ?array $filters = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceMultiInstanceSearchRequestAiSearchOptionsRetrievalFusionMethod $fusionMethod = null,
		/** Controls which documents are candidates for BM25 scoring. 'and' restricts candidates to documents containing all query terms; 'or' includes any document containing at least one term, ranked by BM25 relevance. Defaults to 'and'. */
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceMultiInstanceSearchRequestAiSearchOptionsRetrievalKeywordMatchMode $keywordMatchMode = null,
		public ?float $matchThreshold = null,
		public ?int $maxNumResults = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceMultiInstanceSearchRequestAiSearchOptionsRetrievalRetrievalType $retrievalType = null,
		public ?bool $returnOnFailure = null,
	) {
	}
}
