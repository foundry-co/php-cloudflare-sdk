<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchCreateInstance
{
	public function __construct(
		public ?\DateTimeImmutable $createdAt = null,
		/** AI Search instance ID. Lowercase alphanumeric, hyphens, and underscores. */
		public ?string $id = null,
		public ?\DateTimeImmutable $modifiedAt = null,
		public ?string $aiGatewayId = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchCreateInstanceAiSearchModel $aiSearchModel = null,
		public ?bool $cache = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchCreateInstanceCacheThreshold $cacheThreshold = null,
		/** Cache entry TTL in seconds. Allowed values: 600 (10min), 1800 (30min), 3600 (1h), 7200 (2h), 21600 (6h), 43200 (12h), 86400 (24h), 172800 (48h), 259200 (72h), 518400 (6d). */
		public ?\FoundryCo\Cloudflare\Enums\AiSearchCreateInstanceCacheTtl $cacheTtl = null,
		public ?int $chunkOverlap = null,
		public ?int $chunkSize = null,
		public ?string $createdBy = null,
		public ?array $customMetadata = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchCreateInstanceEmbeddingModel $embeddingModel = null,
		public ?bool $enable = null,
		public ?float $engineVersion = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchCreateInstanceFusionMethod $fusionMethod = null,
		/** Deprecated — use index_method instead. */
		public ?bool $hybridSearchEnabled = null,
		/** Controls which storage backends are used during indexing. Defaults to vector-only. */
		public ?AiSearchCreateInstanceIndexMethod $indexMethod = null,
		public ?AiSearchCreateInstanceIndexingOptions $indexingOptions = null,
		public ?\DateTimeImmutable $lastActivity = null,
		public ?int $maxNumResults = null,
		public ?AiSearchCreateInstanceMetadata $metadata = null,
		public ?string $modifiedBy = null,
		public ?string $namespace = null,
		public ?bool $paused = null,
		public ?string $publicEndpointId = null,
		public ?AiSearchCreateInstancePublicEndpointParams $publicEndpointParams = null,
		public ?bool $reranking = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchCreateInstanceRerankingModel $rerankingModel = null,
		public ?AiSearchCreateInstanceRetrievalOptions $retrievalOptions = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchCreateInstanceRewriteModel $rewriteModel = null,
		public ?bool $rewriteQuery = null,
		public ?float $scoreThreshold = null,
		public ?string $source = null,
		public ?AiSearchCreateInstanceSourceParams $sourceParams = null,
		public ?string $status = null,
		/** Interval between automatic syncs, in seconds. Allowed values: 900 (15min), 1800 (30min), 3600 (1h), 7200 (2h), 14400 (4h), 21600 (6h), 43200 (12h), 86400 (24h). */
		public ?\FoundryCo\Cloudflare\Enums\AiSearchCreateInstanceSyncInterval $syncInterval = null,
		public ?string $tokenId = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchCreateInstanceType $type = null,
	) {
	}
}
