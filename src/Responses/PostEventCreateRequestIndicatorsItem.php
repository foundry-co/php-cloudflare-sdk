<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostEventCreateRequestIndicatorsItem
{
	public function __construct(
		/** The type of indicator (e.g., DOMAIN, IP, JA3, HASH) */
		public ?string $indicatorType = null,
		/** The indicator value (e.g., domain name, IP address, hash) */
		public ?string $value = null,
	) {
	}
}
