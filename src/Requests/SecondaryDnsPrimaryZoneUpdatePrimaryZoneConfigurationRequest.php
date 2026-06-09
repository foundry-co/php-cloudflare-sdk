<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Primary Zone Configuration
 */
readonly class SecondaryDnsPrimaryZoneUpdatePrimaryZoneConfigurationRequest
{
	public function __construct(
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
		    'id' => $this->id,
		    'name' => $this->name,
		    'peers' => $this->peers,
		], fn ($v) => $v !== null);
	}
}
