<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UrlscannerGetScanScanPageCookiesItem
{
	public function __construct(
		public ?string $domain = null,
		public ?float $expires = null,
		public ?bool $httpOnly = null,
		public ?string $name = null,
		public ?string $path = null,
		public ?bool $sameParty = null,
		public ?bool $secure = null,
		public ?bool $session = null,
		public ?float $size = null,
		public ?float $sourcePort = null,
		public ?string $sourceScheme = null,
		public ?string $value = null,
		public ?string $priority = null,
	) {
	}
}
