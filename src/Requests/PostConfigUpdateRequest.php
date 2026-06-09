<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update an existing Scan Config
 */
readonly class PostConfigUpdateRequest
{
	public function __construct(
		/** Defines the number of days between each scan (0 = One-off scan). */
		public ?float $frequency = null,
		/** Defines a list of IP addresses or CIDR blocks to scan. The maximum number of total IP addresses allowed is 5000. */
		public ?array $ips = null,
		/** Defines a list of ports to scan. Valid values are:"default", "all", or a comma-separated list of ports or range of ports (e.g. ["1-80", "443"]). "default" scans the 100 most commonly open ports. */
		public ?array $ports = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'frequency' => $this->frequency,
		    'ips' => $this->ips,
		    'ports' => $this->ports,
		], fn ($v) => $v !== null);
	}
}
