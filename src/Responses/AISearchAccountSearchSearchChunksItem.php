<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AISearchAccountSearchSearchChunksItem
{
	public function __construct(
		public string $id,
		public string $instanceId,
		public float $score,
		public string $text,
		public string $type,
		public ?AISearchAccountSearchSearchChunksItemItem $item = null,
		public ?AISearchAccountSearchSearchChunksItemScoringDetails $scoringDetails = null,
	) {
	}
}
