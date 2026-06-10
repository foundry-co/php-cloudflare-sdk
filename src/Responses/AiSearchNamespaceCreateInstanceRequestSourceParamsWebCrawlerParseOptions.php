<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchNamespaceCreateInstanceRequestSourceParamsWebCrawlerParseOptions
{
	public function __construct(
		/** List of path-to-selector mappings for extracting specific content from crawled pages. Each entry pairs a URL glob pattern with a CSS selector. The first matching path wins. Only the matched HTML fragment is stored and indexed. Omit the field to disable content selection — empty arrays are rejected. */
		public ?array $contentSelector = null,
		/** Up to 5 custom HTTP headers sent with each crawl request. Names must be RFC-7230 token characters (no spaces, colons, or control characters); values must be HTAB + printable ASCII (no CR/LF). */
		public ?array $includeHeaders = null,
		public ?bool $includeImages = null,
		/** List of specific sitemap URLs to use for crawling. Only valid when parse_type is 'sitemap'. */
		public ?array $specificSitemaps = null,
		public ?bool $useBrowserRendering = null,
	) {
	}
}
