<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class BrapiCrawlResult
{
	public function __construct(
		/** Total seconds spent in browser so far. */
		public float $browserSecondsUsed,
		/** Total number of URLs that have been crawled so far. */
		public float $finished,
		/** Crawl job ID. */
		public string $id,
		/** List of crawl job records. */
		public array $records,
		/** Total number of URLs that were skipped due to include/exclude/subdomain filters. Skipped URLs are included in records but are not counted toward total/finished. */
		public float $skipped,
		/** Current crawl job status. */
		public string $status,
		/** Total current number of URLs in the crawl job. */
		public float $total,
		/** Cursor for pagination. */
		public ?string $cursor = null,
	) {
	}
}
