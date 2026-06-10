<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UrlscannerGetScanScanMetaProcessorsTechItemEvidencePatternsItem
{
	public function __construct(
		public ?int $confidence = null,
		public ?array $excludes = null,
		public ?array $implies = null,
		public ?string $match = null,
		/** Header or Cookie name when set */
		public ?string $name = null,
		public ?string $regex = null,
		public ?string $type = null,
		public ?string $value = null,
		public ?string $version = null,
	) {
	}
}
