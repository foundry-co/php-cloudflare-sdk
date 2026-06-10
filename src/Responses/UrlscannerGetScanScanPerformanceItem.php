<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UrlscannerGetScanScanPerformanceItem
{
	public function __construct(
		public ?float $connectEnd = null,
		public ?float $connectStart = null,
		public ?float $decodedBodySize = null,
		public ?float $domComplete = null,
		public ?float $domContentLoadedEventEnd = null,
		public ?float $domContentLoadedEventStart = null,
		public ?float $domInteractive = null,
		public ?float $domainLookupEnd = null,
		public ?float $domainLookupStart = null,
		public ?float $duration = null,
		public ?float $encodedBodySize = null,
		public ?string $entryType = null,
		public ?float $fetchStart = null,
		public ?string $initiatorType = null,
		public ?float $loadEventEnd = null,
		public ?float $loadEventStart = null,
		public ?string $name = null,
		public ?string $nextHopProtocol = null,
		public ?float $redirectCount = null,
		public ?float $redirectEnd = null,
		public ?float $redirectStart = null,
		public ?float $requestStart = null,
		public ?float $responseEnd = null,
		public ?float $responseStart = null,
		public ?float $secureConnectionStart = null,
		public ?float $startTime = null,
		public ?float $transferSize = null,
		public ?string $type = null,
		public ?float $unloadEventEnd = null,
		public ?float $unloadEventStart = null,
		public ?float $workerStart = null,
	) {
	}
}
