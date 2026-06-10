<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSearchNamespaceListInstancesSourceParamsWebCrawlerParseOptionsContentSelectorItem
{
	public function __construct(
		/** Glob pattern to match against the page URL path. Uses standard glob syntax: * matches within a segment, ** crosses directories. */
		public ?string $path = null,
		/** CSS selector to extract content from pages matching the path pattern. Must not contain disallowed characters (;, `, $, {, }, \). Must target a single element; if multiple elements match, the selector is ignored and the full page is used. */
		public ?string $selector = null,
	) {
	}
}
