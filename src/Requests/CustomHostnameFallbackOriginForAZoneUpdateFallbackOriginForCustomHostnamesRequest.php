<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Fallback Origin for Custom Hostnames
 */
readonly class CustomHostnameFallbackOriginForAZoneUpdateFallbackOriginForCustomHostnamesRequest
{
	public function __construct(
		/** Your origin hostname that requests to your custom hostnames will be sent to. */
		public string $origin,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'origin' => $this->origin,
		], fn ($v) => $v !== null);
	}
}
