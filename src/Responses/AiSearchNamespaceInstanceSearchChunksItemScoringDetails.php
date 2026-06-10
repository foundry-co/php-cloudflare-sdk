<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchNamespaceInstanceSearchChunksItemScoringDetails
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceInstanceSearchChunksItemScoringDetailsFusionMethod $fusionMethod = null,
		public ?float $keywordRank = null,
		public ?float $keywordScore = null,
		public ?float $rerankingScore = null,
		public ?float $vectorRank = null,
		public ?float $vectorScore = null,
	) {
	}
}
