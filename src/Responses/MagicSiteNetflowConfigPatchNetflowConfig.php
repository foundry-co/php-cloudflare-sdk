<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * NetFlow configuration for a site.
 */
readonly class MagicSiteNetflowConfigPatchNetflowConfig
{
	public function __construct(
		/** IPv4 address of the NetFlow collector. */
		public ?string $collectorIp = null,
		/** Timeout in seconds for active flows (defaults to 30). */
		public ?int $activeTimeout = null,
		/** UDP port of the NetFlow collector (defaults to 2055). */
		public ?int $collectorPort = null,
		/** Timeout in seconds for inactive flows (defaults to 15). */
		public ?int $inactiveTimeout = null,
		/** Sampling rate for NetFlow records (1 = every packet, 1000 = 1 in 1000 packets). Defaults to 1. */
		public ?int $samplingRate = null,
	) {
	}
}
