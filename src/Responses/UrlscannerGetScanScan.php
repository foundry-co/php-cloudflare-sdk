<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UrlscannerGetScanScan
{
	public function __construct(
		public ?array $certificates = null,
		public ?UrlscannerGetScanScanGeo $geo = null,
		public ?UrlscannerGetScanScanMeta $meta = null,
		public ?UrlscannerGetScanScanPage $page = null,
		public ?array $performance = null,
		public ?UrlscannerGetScanScanTask $task = null,
		public ?UrlscannerGetScanScanVerdicts $verdicts = null,
		/** Dictionary of Autonomous System Numbers where ASN's are the keys */
		public ?UrlscannerGetScanScanAsns $asns = null,
		public ?UrlscannerGetScanScanDomains $domains = null,
		public ?UrlscannerGetScanScanIps $ips = null,
		public ?UrlscannerGetScanScanLinks $links = null,
	) {
	}
}
