<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update log retention flag
 */
readonly class PostZonesZoneIdLogsControlRetentionFlagRequest
{
	public function __construct(
		/** The log retention flag for Logpull API. */
		public ?bool $flag = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'flag' => $this->flag,
		], fn ($v) => $v !== null);
	}
}
