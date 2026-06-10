<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update instance.
 */
readonly class AiSearchNamespaceUpdateInstanceRequest
{
	public function __construct(
		public ?string $aiGatewayId = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceUpdateInstanceRequestAiSearchModel $aiSearchModel = null,
		public ?bool $cache = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceUpdateInstanceRequestCacheThreshold $cacheThreshold = null,
		/** Cache entry TTL in seconds. Allowed values: 600 (10min), 1800 (30min), 3600 (1h), 7200 (2h), 21600 (6h), 43200 (12h), 86400 (24h), 172800 (48h), 259200 (72h), 518400 (6d). */
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceUpdateInstanceRequestCacheTtl $cacheTtl = null,
		public ?bool $chunk = null,
		public ?int $chunkOverlap = null,
		public ?int $chunkSize = null,
		public ?array $customMetadata = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceUpdateInstanceRequestEmbeddingModel $embeddingModel = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceUpdateInstanceRequestFusionMethod $fusionMethod = null,
		/** Controls which storage backends are used during indexing. Defaults to vector-only. */
		public ?\FoundryCo\Cloudflare\Responses\AiSearchNamespaceUpdateInstanceRequestIndexMethod $indexMethod = null,
		public ?\FoundryCo\Cloudflare\Responses\AiSearchNamespaceUpdateInstanceRequestIndexingOptions $indexingOptions = null,
		public ?int $maxNumResults = null,
		public ?\FoundryCo\Cloudflare\Responses\AiSearchNamespaceUpdateInstanceRequestMetadata $metadata = null,
		public ?bool $paused = null,
		public ?\FoundryCo\Cloudflare\Responses\AiSearchNamespaceUpdateInstanceRequestPublicEndpointParams $publicEndpointParams = null,
		public ?bool $reranking = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceUpdateInstanceRequestRerankingModel $rerankingModel = null,
		public ?\FoundryCo\Cloudflare\Responses\AiSearchNamespaceUpdateInstanceRequestRetrievalOptions $retrievalOptions = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceUpdateInstanceRequestRewriteModel $rewriteModel = null,
		public ?bool $rewriteQuery = null,
		public ?float $scoreThreshold = null,
		public ?\FoundryCo\Cloudflare\Responses\AiSearchNamespaceUpdateInstanceRequestSourceParams $sourceParams = null,
		public ?bool $summarization = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceUpdateInstanceRequestSummarizationModel $summarizationModel = null,
		/** Interval between automatic syncs, in seconds. Allowed values: 900 (15min), 1800 (30min), 3600 (1h), 7200 (2h), 14400 (4h), 21600 (6h), 43200 (12h), 86400 (24h). */
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceUpdateInstanceRequestSyncInterval $syncInterval = null,
		public ?string $systemPromptAiSearch = null,
		public ?string $systemPromptIndexSummarization = null,
		public ?string $systemPromptRewriteQuery = null,
		public ?string $tokenId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'ai_gateway_id' => $this->aiGatewayId,
		    'ai_search_model' => $this->aiSearchModel?->value,
		    'cache' => $this->cache,
		    'cache_threshold' => $this->cacheThreshold?->value,
		    'cache_ttl' => $this->cacheTtl?->value,
		    'chunk' => $this->chunk,
		    'chunk_overlap' => $this->chunkOverlap,
		    'chunk_size' => $this->chunkSize,
		    'custom_metadata' => $this->customMetadata,
		    'embedding_model' => $this->embeddingModel?->value,
		    'fusion_method' => $this->fusionMethod?->value,
		    'index_method' => $this->indexMethod?->toArray(),
		    'indexing_options' => $this->indexingOptions?->toArray(),
		    'max_num_results' => $this->maxNumResults,
		    'metadata' => $this->metadata?->toArray(),
		    'paused' => $this->paused,
		    'public_endpoint_params' => $this->publicEndpointParams?->toArray(),
		    'reranking' => $this->reranking,
		    'reranking_model' => $this->rerankingModel?->value,
		    'retrieval_options' => $this->retrievalOptions?->toArray(),
		    'rewrite_model' => $this->rewriteModel?->value,
		    'rewrite_query' => $this->rewriteQuery,
		    'score_threshold' => $this->scoreThreshold,
		    'source_params' => $this->sourceParams?->toArray(),
		    'summarization' => $this->summarization,
		    'summarization_model' => $this->summarizationModel?->value,
		    'sync_interval' => $this->syncInterval?->value,
		    'system_prompt_ai_search' => $this->systemPromptAiSearch,
		    'system_prompt_index_summarization' => $this->systemPromptIndexSummarization,
		    'system_prompt_rewrite_query' => $this->systemPromptRewriteQuery,
		    'token_id' => $this->tokenId,
		], fn ($v) => $v !== null);
	}
}
