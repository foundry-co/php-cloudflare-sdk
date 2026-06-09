<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class URLScannerDeprecatedHarHarLogEntriesItem
{
	public function __construct(
		public string $initialPriority,
		public string $initiatorType,
		public string $priority,
		public string $requestId,
		public float $requestTime,
		public string $resourceType,
		public array $cache,
		public string $connection,
		public string $pageref,
		public URLScannerDeprecatedHarHarLogEntriesItemRequest $request,
		public URLScannerDeprecatedHarHarLogEntriesItemResponse $response,
		public string $serverIPAddress,
		public string $startedDateTime,
		public float $time,
	) {
	}
}
