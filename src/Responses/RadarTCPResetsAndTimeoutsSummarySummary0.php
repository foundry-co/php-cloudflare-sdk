<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarTCPResetsAndTimeoutsSummarySummary0
{
	public function __construct(
		/** Connection resets within the first 10 packets from the client, but after the server has received multiple data packets. */
		public string $laterInFlow,
		/** All other connections. */
		public string $noMatch,
		/** Connection resets or timeouts after the server received both a SYN packet and an ACK packet, meaning the connection was successfully established. */
		public string $postAck,
		/** Connection resets or timeouts after the server received a packet with PSH flag set, following connection establishment. */
		public string $postPsh,
		/** Connection resets or timeouts after the server received only a single SYN packet. */
		public string $postSyn,
	) {
	}
}
