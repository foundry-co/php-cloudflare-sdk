<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class BrapiCrawlResultRecordsItemMetadata
{
	public function __construct(
		/** HTTP status code of the crawled page. */
		public float $status,
		/** Final URL of the crawled page. */
		public string $url,
		/** Title of the crawled page. */
		public ?string $title = null,
	) {
	}
}
