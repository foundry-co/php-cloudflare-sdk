<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class BrapiGetCrawlResultRecordsItem
{
	public function __construct(
		public ?BrapiGetCrawlResultRecordsItemMetadata $metadata = null,
		/** Current status of the crawled URL. */
		public ?\FoundryCo\Cloudflare\Enums\BrapiGetCrawlResultRecordsItemStatus $status = null,
		/** Crawled URL. */
		public ?string $url = null,
		/** HTML content of the crawled URL. */
		public ?string $html = null,
		/** JSON of the content of the crawled URL. */
		public ?array $json = null,
		/** Markdown of the content of the crawled URL. */
		public ?string $markdown = null,
	) {
	}
}
