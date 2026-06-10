<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DiagnosticsTracerouteColosItemHopsItemNodesItem
{
	public function __construct(
		/** AS number associated with the node object. */
		public ?string $asn = null,
		/** IP address of the node. */
		public ?string $ip = null,
		/** Field appears if there is an additional annotation printed when the probe returns. Field also appears when running a GRE+ICMP traceroute to denote which traceroute a node comes from. */
		public ?array $labels = null,
		/** Maximum RTT in ms. */
		public ?float $maxRttMs = null,
		/** Mean RTT in ms. */
		public ?float $meanRttMs = null,
		/** Minimum RTT in ms. */
		public ?float $minRttMs = null,
		/** Host name of the address, this may be the same as the IP address. */
		public ?string $name = null,
		/** Number of packets with a response from this node. */
		public ?int $packetCount = null,
		/** Standard deviation of the RTTs in ms. */
		public ?float $stdDevRttMs = null,
	) {
	}
}
