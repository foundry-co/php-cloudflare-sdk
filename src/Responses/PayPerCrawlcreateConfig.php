<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PayPerCrawlcreateConfig
{
	public function __construct(
		public ?array $botOverrides = null,
		public ?bool $enabled = null,
		/** Price in microcents 1 USD = 100,000,000 microcents. Must be 0 or a multiple of 100,000 $0.001. Range: $0.001–$9,999.999. */
		public ?int $priceUsdMicrocents = null,
	) {
	}
}
