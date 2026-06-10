<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DiagnosticsTracerouteColosItemHopsItem
{
	public function __construct(
		/** An array of node objects. */
		public ?array $nodes = null,
		/** Number of packets where no response was received. */
		public ?int $packetsLost = null,
		/** Number of packets sent with specified TTL. */
		public ?int $packetsSent = null,
		/** The time to live (TTL). */
		public ?int $packetsTtl = null,
	) {
	}
}
