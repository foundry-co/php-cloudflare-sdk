<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchCreateInstanceRequestSourceParamsWebCrawlerStoreOptions
{
	public function __construct(
		public string $storageId,
		public ?string $r2Jurisdiction = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchCreateInstanceRequestSourceParamsWebCrawlerStoreOptionsStorageType $storageType = null,
	) {
	}
}
