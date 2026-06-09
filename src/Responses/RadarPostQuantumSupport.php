<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarPostQuantumSupport
{
	public function __construct(
		public RadarPostQuantumSupportBugs $bugs,
		/** The host that was tested */
		public string $host,
		/** TLS CurveID of the negotiated key exchange */
		public float $kex,
		/** Human-readable name of the key exchange algorithm */
		public string $kexName,
		/** Whether the negotiated key exchange uses Post-Quantum cryptography (specifically X25519MLKEM768) */
		public bool $pq,
	) {
	}
}
