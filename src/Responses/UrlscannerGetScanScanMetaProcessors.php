<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UrlscannerGetScanScanMetaProcessors
{
	public function __construct(
		public ?UrlscannerGetScanScanMetaProcessorsCategories $categories = null,
		public ?array $phishing = null,
		public ?UrlscannerGetScanScanMetaProcessorsRank $rank = null,
		public ?array $tech = null,
	) {
	}
}
