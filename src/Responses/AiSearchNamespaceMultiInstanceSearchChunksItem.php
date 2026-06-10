<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchNamespaceMultiInstanceSearchChunksItem
{
	public function __construct(
		public ?string $id = null,
		public ?string $instanceId = null,
		public ?float $score = null,
		public ?string $text = null,
		public ?string $type = null,
		public ?AiSearchNamespaceMultiInstanceSearchChunksItemItem $item = null,
		public ?AiSearchNamespaceMultiInstanceSearchChunksItemScoringDetails $scoringDetails = null,
	) {
	}
}
