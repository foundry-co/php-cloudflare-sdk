<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class BrapiCrawlResultRecordsItem
{
	public function __construct(
		public BrapiCrawlResultRecordsItemMetadata $metadata,
		/** Current status of the crawled URL. */
		public \FoundryCo\Cloudflare\Enums\BrapiCrawlResultRecordsItemStatus $status,
		/** Crawled URL. */
		public string $url,
		/** HTML content of the crawled URL. */
		public ?string $html = null,
		/** JSON of the content of the crawled URL. */
		public ?array $json = null,
		/** Markdown of the content of the crawled URL. */
		public ?string $markdown = null,
	) {
	}
}
