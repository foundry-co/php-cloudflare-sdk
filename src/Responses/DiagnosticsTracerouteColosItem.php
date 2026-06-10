<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DiagnosticsTracerouteColosItem
{
	public function __construct(
		public ?DiagnosticsTracerouteColosItemColo $colo = null,
		/** Errors resulting from collecting traceroute from colo to target. */
		public ?\FoundryCo\Cloudflare\Enums\DiagnosticsTracerouteColosItemError $error = null,
		public ?array $hops = null,
		/** Aggregated statistics from all hops about the target. */
		public ?array $targetSummary = null,
		/** Total time of traceroute in ms. */
		public ?int $tracerouteTimeMs = null,
	) {
	}
}
