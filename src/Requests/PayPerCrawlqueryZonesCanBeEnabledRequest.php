<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Gets the can_be_enabled zone setting
 */
readonly class PayPerCrawlqueryZonesCanBeEnabledRequest
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
