<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create NetFlow Configuration
 */
readonly class MagicSiteNetflowConfigCreateNetflowConfigRequest
{
	public function __construct(
		/** Timeout in seconds for active flows. */
		public ?int $activeTimeout = null,
		/** IPv4 address of the NetFlow collector. */
		public ?string $collectorIp = null,
		/** UDP port of the NetFlow collector. */
		public ?int $collectorPort = null,
		/** Timeout in seconds for inactive flows. */
		public ?int $inactiveTimeout = null,
		/** Sampling rate for NetFlow records (1 = every packet). */
		public ?int $samplingRate = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'active_timeout' => $this->activeTimeout,
		    'collector_ip' => $this->collectorIp,
		    'collector_port' => $this->collectorPort,
		    'inactive_timeout' => $this->inactiveTimeout,
		    'sampling_rate' => $this->samplingRate,
		], fn ($v) => $v !== null);
	}
}
