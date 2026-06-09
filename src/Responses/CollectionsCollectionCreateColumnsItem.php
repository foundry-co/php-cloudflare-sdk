<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CollectionsCollectionCreateColumnsItem
{
	public function __construct(
		public string $defaultValue,
		public string $id,
		public string $name,
		public int $position,
		public bool $required,
		public \FoundryCo\Cloudflare\Enums\CollectionsCollectionCreateColumnsItemType $type,
	) {
	}
}
