<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarPostQuantumSupportBugs
{
	public function __construct(
		/** Server sends a HelloRetryRequest but fails to complete the handshake after the client sends the second ClientHello. Often caused by non-compliant TLS 1.3 implementations on shared hosting providers. */
		public bool $hrrFailure,
		/** Server rejects fragmented ClientHello caused by large PQ keyshare, but accepts classical (non-PQ) handshakes. Typically caused by middleboxes or firewalls that cannot reassemble split TLS ClientHello messages. */
		public bool $splitClientHello,
		/** Server cannot handle an unknown key exchange algorithm in the ClientHello keyshare extension. Compliant servers should respond with HelloRetryRequest for a supported algorithm. */
		public bool $unknownKeyshare,
	) {
	}
}
