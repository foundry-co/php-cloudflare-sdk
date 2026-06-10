<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetPostQuantumTlsSupport
{
	public function __construct(
		public ?RadarGetPostQuantumTlsSupportBugs $bugs = null,
		/** The host that was tested */
		public ?string $host = null,
		/** TLS CurveID of the negotiated key exchange */
		public ?float $kex = null,
		/** Human-readable name of the key exchange algorithm */
		public ?string $kexName = null,
		/** Whether the negotiated key exchange uses Post-Quantum cryptography (specifically X25519MLKEM768) */
		public ?bool $pq = null,
	) {
	}
}
