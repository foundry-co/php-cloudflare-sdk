<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Snapshot Netdev
 */
readonly class MconnConnectorTelemetrySnapshotsListLatestItemsItemNetdevsItem
{
	public function __construct(
		/** Name of the network device */
		public ?string $name = null,
		/** Total bytes received */
		public ?float $recvBytes = null,
		/** Compressed packets received */
		public ?float $recvCompressed = null,
		/** Packets dropped */
		public ?float $recvDrop = null,
		/** Bad packets received */
		public ?float $recvErrs = null,
		/** FIFO overruns */
		public ?float $recvFifo = null,
		/** Frame alignment errors */
		public ?float $recvFrame = null,
		/** Multicast packets received */
		public ?float $recvMulticast = null,
		/** Total packets received */
		public ?float $recvPackets = null,
		/** Total bytes transmitted */
		public ?float $sentBytes = null,
		/** Number of packets not sent due to carrier errors */
		public ?float $sentCarrier = null,
		/** Number of collisions */
		public ?float $sentColls = null,
		/** Number of compressed packets transmitted */
		public ?float $sentCompressed = null,
		/** Number of packets dropped during transmission */
		public ?float $sentDrop = null,
		/** Number of transmission errors */
		public ?float $sentErrs = null,
		/** FIFO overruns */
		public ?float $sentFifo = null,
		/** Total packets transmitted */
		public ?float $sentPackets = null,
	) {
	}
}
