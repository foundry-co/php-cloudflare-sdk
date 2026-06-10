<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UrlscannerGetScanHarHarLogEntriesItem
{
	public function __construct(
		public ?string $initialPriority = null,
		public ?string $initiatorType = null,
		public ?string $priority = null,
		public ?string $requestId = null,
		public ?float $requestTime = null,
		public ?string $resourceType = null,
		public ?array $cache = null,
		public ?string $connection = null,
		public ?string $pageref = null,
		public ?UrlscannerGetScanHarHarLogEntriesItemRequest $request = null,
		public ?UrlscannerGetScanHarHarLogEntriesItemResponse $response = null,
		public ?string $serverIPAddress = null,
		public ?string $startedDateTime = null,
		public ?float $time = null,
	) {
	}
}
