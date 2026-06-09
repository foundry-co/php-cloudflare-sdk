<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchUpdateInstanceRequestSourceParamsWebCrawlerParseOptionsContentSelectorItem
{
	public function __construct(
		/** Glob pattern to match against the page URL path. Uses standard glob syntax: * matches within a segment, ** crosses directories. */
		public string $path,
		/** CSS selector to extract content from pages matching the path pattern. Must not contain disallowed characters (;, `, $, {, }, \). Must target a single element; if multiple elements match, the selector is ignored and the full page is used. */
		public string $selector,
	) {
	}
}
