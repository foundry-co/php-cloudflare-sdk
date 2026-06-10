<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DiagnosticsTracerouteRequestOptions
{
	public function __construct(
		/** Max TTL. */
		public ?int $maxTtl = null,
		/** Type of packet sent. */
		public ?\FoundryCo\Cloudflare\Enums\DiagnosticsTracerouteRequestOptionsPacketType $packetType = null,
		/** Number of packets sent at each TTL. */
		public ?int $packetsPerTtl = null,
		/** For UDP and TCP, specifies the destination port. For ICMP, specifies the initial ICMP sequence value. Default value 0 will choose the best value to use for each protocol. */
		public ?int $port = null,
		/** Set the time (in seconds) to wait for a response to a probe. */
		public ?int $waitTime = null,
	) {
	}
}
