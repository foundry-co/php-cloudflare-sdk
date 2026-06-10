<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create new instance.
 */
readonly class AiSearchNamespaceCreateInstanceRequest
{
	public function __construct(
		/** AI Search instance ID. Lowercase alphanumeric, hyphens, and underscores. */
		public string $id,
		public ?string $aiGatewayId = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceCreateInstanceRequestAiSearchModel $aiSearchModel = null,
		public ?bool $cache = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceCreateInstanceRequestCacheThreshold $cacheThreshold = null,
		/** Cache entry TTL in seconds. Allowed values: 600 (10min), 1800 (30min), 3600 (1h), 7200 (2h), 21600 (6h), 43200 (12h), 86400 (24h), 172800 (48h), 259200 (72h), 518400 (6d). */
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceCreateInstanceRequestCacheTtl $cacheTtl = null,
		public ?bool $chunk = null,
		public ?int $chunkOverlap = null,
		public ?int $chunkSize = null,
		public ?array $customMetadata = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceCreateInstanceRequestEmbeddingModel $embeddingModel = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceCreateInstanceRequestFusionMethod $fusionMethod = null,
		/** Deprecated — use index_method instead. */
		public ?bool $hybridSearchEnabled = null,
		/** Controls which storage backends are used during indexing. Defaults to vector-only. */
		public ?\FoundryCo\Cloudflare\Responses\AiSearchNamespaceCreateInstanceRequestIndexMethod $indexMethod = null,
		public ?\FoundryCo\Cloudflare\Responses\AiSearchNamespaceCreateInstanceRequestIndexingOptions $indexingOptions = null,
		public ?int $maxNumResults = null,
		public ?\FoundryCo\Cloudflare\Responses\AiSearchNamespaceCreateInstanceRequestMetadata $metadata = null,
		public ?\FoundryCo\Cloudflare\Responses\AiSearchNamespaceCreateInstanceRequestPublicEndpointParams $publicEndpointParams = null,
		public ?bool $reranking = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceCreateInstanceRequestRerankingModel $rerankingModel = null,
		public ?\FoundryCo\Cloudflare\Responses\AiSearchNamespaceCreateInstanceRequestRetrievalOptions $retrievalOptions = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceCreateInstanceRequestRewriteModel $rewriteModel = null,
		public ?bool $rewriteQuery = null,
		public ?float $scoreThreshold = null,
		public ?string $source = null,
		public ?\FoundryCo\Cloudflare\Responses\AiSearchNamespaceCreateInstanceRequestSourceParams $sourceParams = null,
		/** Interval between automatic syncs, in seconds. Allowed values: 900 (15min), 1800 (30min), 3600 (1h), 7200 (2h), 14400 (4h), 21600 (6h), 43200 (12h), 86400 (24h). */
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceCreateInstanceRequestSyncInterval $syncInterval = null,
		public ?string $tokenId = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceCreateInstanceRequestType $type = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'id' => $this->id,
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
		    'hybrid_search_enabled' => $this->hybridSearchEnabled,
		    'index_method' => $this->indexMethod?->toArray(),
		    'indexing_options' => $this->indexingOptions?->toArray(),
		    'max_num_results' => $this->maxNumResults,
		    'metadata' => $this->metadata?->toArray(),
		    'public_endpoint_params' => $this->publicEndpointParams?->toArray(),
		    'reranking' => $this->reranking,
		    'reranking_model' => $this->rerankingModel?->value,
		    'retrieval_options' => $this->retrievalOptions?->toArray(),
		    'rewrite_model' => $this->rewriteModel?->value,
		    'rewrite_query' => $this->rewriteQuery,
		    'score_threshold' => $this->scoreThreshold,
		    'source' => $this->source,
		    'source_params' => $this->sourceParams?->toArray(),
		    'sync_interval' => $this->syncInterval?->value,
		    'token_id' => $this->tokenId,
		    'type' => $this->type?->value,
		], fn ($v) => $v !== null);
	}
}
