<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Zone Hold
 */
readonly class Zones0HoldPatchRequest
{
	public function __construct(
		/**
		 * If `hold_after` is provided and future-dated, the hold will be temporarily disabled,
		 * then automatically re-enabled by the system at the time specified
		 * in this RFC3339-formatted timestamp. A past-dated `hold_after` value will have
		 * no effect on an existing, enabled hold. Providing an empty string will set its value
		 * to the current time. Providing `null` will disable the hold indefinitely.
		 */
		public ?string $holdAfter = null,
		/**
		 * If `true`, the zone hold will extend to block any subdomain of the given zone, as well
		 * as SSL4SaaS Custom Hostnames. For example, a zone hold on a zone with the hostname
		 * 'example.com' and include_subdomains=true will block 'example.com',
		 * 'staging.example.com', 'api.staging.example.com', etc.
		 */
		public ?bool $includeSubdomains = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'hold_after' => $this->holdAfter,
		    'include_subdomains' => $this->includeSubdomains,
		], fn ($v) => $v !== null);
	}
}
