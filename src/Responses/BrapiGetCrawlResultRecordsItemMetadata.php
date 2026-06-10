<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class BrapiGetCrawlResultRecordsItemMetadata
{
	public function __construct(
		/** HTTP status code of the crawled page. */
		public ?float $status = null,
		/** Final URL of the crawled page. */
		public ?string $url = null,
		/** Title of the crawled page. */
		public ?string $title = null,
	) {
	}
}
