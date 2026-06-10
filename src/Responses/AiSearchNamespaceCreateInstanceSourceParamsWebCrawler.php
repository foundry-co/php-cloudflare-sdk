<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchNamespaceCreateInstanceSourceParamsWebCrawler
{
	public function __construct(
		public ?AiSearchNamespaceCreateInstanceSourceParamsWebCrawlerCrawlOptions $crawlOptions = null,
		public ?AiSearchNamespaceCreateInstanceSourceParamsWebCrawlerParseOptions $parseOptions = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceCreateInstanceSourceParamsWebCrawlerParseType $parseType = null,
		public ?AiSearchNamespaceCreateInstanceSourceParamsWebCrawlerStoreOptions $storeOptions = null,
	) {
	}
}
