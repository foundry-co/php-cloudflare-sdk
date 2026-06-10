<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchNamespaceUpdateInstanceSourceParamsWebCrawler
{
	public function __construct(
		public ?AiSearchNamespaceUpdateInstanceSourceParamsWebCrawlerCrawlOptions $crawlOptions = null,
		public ?AiSearchNamespaceUpdateInstanceSourceParamsWebCrawlerParseOptions $parseOptions = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceUpdateInstanceSourceParamsWebCrawlerParseType $parseType = null,
		public ?AiSearchNamespaceUpdateInstanceSourceParamsWebCrawlerStoreOptions $storeOptions = null,
	) {
	}
}
