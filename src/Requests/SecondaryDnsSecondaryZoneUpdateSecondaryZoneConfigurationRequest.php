<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Secondary Zone Configuration
 */
readonly class SecondaryDnsSecondaryZoneUpdateSecondaryZoneConfigurationRequest
{
	public function __construct(
		/**
		 * How often should a secondary zone auto refresh regardless of DNS NOTIFY.
		 * Not applicable for primary zones.
		 */
		public float $autoRefreshSeconds,
		public string $id,
		/** Zone name. */
		public string $name,
		/** A list of peer tags. */
		public array $peers,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'auto_refresh_seconds' => $this->autoRefreshSeconds,
		    'id' => $this->id,
		    'name' => $this->name,
		    'peers' => $this->peers,
		], fn ($v) => $v !== null);
	}
}
