<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetTcpResetsTimeoutsSummarySummary0
{
	public function __construct(
		/** Connection resets within the first 10 packets from the client, but after the server has received multiple data packets. */
		public ?string $laterInFlow = null,
		/** All other connections. */
		public ?string $noMatch = null,
		/** Connection resets or timeouts after the server received both a SYN packet and an ACK packet, meaning the connection was successfully established. */
		public ?string $postAck = null,
		/** Connection resets or timeouts after the server received a packet with PSH flag set, following connection establishment. */
		public ?string $postPsh = null,
		/** Connection resets or timeouts after the server received only a single SYN packet. */
		public ?string $postSyn = null,
	) {
	}
}
