<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchNamespaceDeleteInstanceSourceParamsWebCrawlerCrawlOptions
{
	public function __construct(
		public ?float $depth = null,
		public ?bool $includeExternalLinks = null,
		public ?bool $includeSubdomains = null,
		public ?float $maxAge = null,
		public ?\FoundryCo\Cloudflare\Enums\AiSearchNamespaceDeleteInstanceSourceParamsWebCrawlerCrawlOptionsSource $source = null,
	) {
	}
}
