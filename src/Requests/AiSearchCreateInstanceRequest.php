<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create new instance.
 */
readonly class AiSearchCreateInstanceRequest
{
	public function __construct(
		/** AI Search instance ID. Lowercase alphanumeric, hyphens, and underscores. */
		public string $id,
		public ?string $aiGatewayId = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchCreateInstanceRequestAiSearchModel $aiSearchModel = null,
		public ?bool $cache = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchCreateInstanceRequestCacheThreshold $cacheThreshold = null,
		/** Cache entry TTL in seconds. Allowed values: 600 (10min), 1800 (30min), 3600 (1h), 7200 (2h), 21600 (6h), 43200 (12h), 86400 (24h), 172800 (48h), 259200 (72h), 518400 (6d). */
		public mixed $cacheTtl = null,
		public ?bool $chunk = null,
		public ?int $chunkOverlap = null,
		public ?int $chunkSize = null,
		public ?array $customMetadata = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchCreateInstanceRequestEmbeddingModel $embeddingModel = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchCreateInstanceRequestFusionMethod $fusionMethod = null,
		/** Deprecated — use index_method instead. */
		public ?bool $hybridSearchEnabled = null,
		/** Controls which storage backends are used during indexing. Defaults to vector-only. */
		public ?\FoundryCo\Cloudflare\Responses\AiSearchCreateInstanceRequestIndexMethod $indexMethod = null,
		public ?\FoundryCo\Cloudflare\Responses\AiSearchCreateInstanceRequestIndexingOptions $indexingOptions = null,
		public ?int $maxNumResults = null,
		public ?\FoundryCo\Cloudflare\Responses\AiSearchCreateInstanceRequestMetadata $metadata = null,
		public ?\FoundryCo\Cloudflare\Responses\AiSearchCreateInstanceRequestPublicEndpointParams $publicEndpointParams = null,
		public ?bool $reranking = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchCreateInstanceRequestRerankingModel $rerankingModel = null,
		public ?\FoundryCo\Cloudflare\Responses\AiSearchCreateInstanceRequestRetrievalOptions $retrievalOptions = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchCreateInstanceRequestRewriteModel $rewriteModel = null,
		public ?bool $rewriteQuery = null,
		public ?float $scoreThreshold = null,
		public ?string $source = null,
		public ?\FoundryCo\Cloudflare\Responses\AiSearchCreateInstanceRequestSourceParams $sourceParams = null,
		/** Interval between automatic syncs, in seconds. Allowed values: 900 (15min), 1800 (30min), 3600 (1h), 7200 (2h), 14400 (4h), 21600 (6h), 43200 (12h), 86400 (24h). */
		public mixed $syncInterval = null,
		public ?string $tokenId = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchCreateInstanceRequestType $type = null,
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
		    'cache_ttl' => $this->cacheTtl,
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
		    'sync_interval' => $this->syncInterval,
		    'token_id' => $this->tokenId,
		    'type' => $this->type?->value,
		], fn ($v) => $v !== null);
	}
}
