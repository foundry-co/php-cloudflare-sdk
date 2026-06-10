<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class BrapiGetCrawlResult
{
	public function __construct(
		/** Total seconds spent in browser so far. */
		public ?float $browserSecondsUsed = null,
		/** Total number of URLs that have been crawled so far. */
		public ?float $finished = null,
		/** Crawl job ID. */
		public ?string $id = null,
		/** List of crawl job records. */
		public ?array $records = null,
		/** Total number of URLs that were skipped due to include/exclude/subdomain filters. Skipped URLs are included in records but are not counted toward total/finished. */
		public ?float $skipped = null,
		/** Current crawl job status. */
		public ?string $status = null,
		/** Total current number of URLs in the crawl job. */
		public ?float $total = null,
		/** Cursor for pagination. */
		public ?string $cursor = null,
	) {
	}
}
