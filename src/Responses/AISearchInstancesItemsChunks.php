<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AISearchInstancesItemsChunks
{
	public function __construct(
		public string $id,
		public AISearchInstancesItemsChunksItem $item,
		public string $text,
		public ?float $endByte = null,
		public ?float $startByte = null,
	) {
	}
}
