<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Set can_be_enabled setting on zones
 */
readonly class PayPerCrawlsetZonesCanBeEnabledRequest
{
	public function __construct(
		public ?array $zones = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'zones' => $this->zones,
		], fn ($v) => $v !== null);
	}
}
