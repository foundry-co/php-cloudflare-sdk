<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchFetchInstance
{
	public function __construct(
		public ?\DateTimeImmutable $createdAt = null,
		/** AI Search instance ID. Lowercase alphanumeric, hyphens, and underscores. */
		public ?string $id = null,
		public ?\DateTimeImmutable $modifiedAt = null,
		public ?string $aiGatewayId = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchFetchInstanceAiSearchModel $aiSearchModel = null,
		public ?bool $cache = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchFetchInstanceCacheThreshold $cacheThreshold = null,
		/** Cache entry TTL in seconds. Allowed values: 600 (10min), 1800 (30min), 3600 (1h), 7200 (2h), 21600 (6h), 43200 (12h), 86400 (24h), 172800 (48h), 259200 (72h), 518400 (6d). */
		public ?\FoundryCo\Cloudflare\Enums\AiSearchFetchInstanceCacheTtl $cacheTtl = null,
		public ?int $chunkOverlap = null,
		public ?int $chunkSize = null,
		public ?string $createdBy = null,
		public ?array $customMetadata = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchFetchInstanceEmbeddingModel $embeddingModel = null,
		public ?bool $enable = null,
		public ?float $engineVersion = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchFetchInstanceFusionMethod $fusionMethod = null,
		/** Deprecated — use index_method instead. */
		public ?bool $hybridSearchEnabled = null,
		/** Controls which storage backends are used during indexing. Defaults to vector-only. */
		public ?AiSearchFetchInstanceIndexMethod $indexMethod = null,
		public ?AiSearchFetchInstanceIndexingOptions $indexingOptions = null,
		public ?\DateTimeImmutable $lastActivity = null,
		public ?int $maxNumResults = null,
		public ?AiSearchFetchInstanceMetadata $metadata = null,
		public ?string $modifiedBy = null,
		public ?string $namespace = null,
		public ?bool $paused = null,
		public ?string $publicEndpointId = null,
		public ?AiSearchFetchInstancePublicEndpointParams $publicEndpointParams = null,
		public ?bool $reranking = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchFetchInstanceRerankingModel $rerankingModel = null,
		public ?AiSearchFetchInstanceRetrievalOptions $retrievalOptions = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchFetchInstanceRewriteModel $rewriteModel = null,
		public ?bool $rewriteQuery = null,
		public ?float $scoreThreshold = null,
		public ?string $source = null,
		public ?AiSearchFetchInstanceSourceParams $sourceParams = null,
		public ?string $status = null,
		/** Interval between automatic syncs, in seconds. Allowed values: 900 (15min), 1800 (30min), 3600 (1h), 7200 (2h), 14400 (4h), 21600 (6h), 43200 (12h), 86400 (24h). */
		public ?\FoundryCo\Cloudflare\Enums\AiSearchFetchInstanceSyncInterval $syncInterval = null,
		public ?string $tokenId = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchFetchInstanceType $type = null,
	) {
	}
}
