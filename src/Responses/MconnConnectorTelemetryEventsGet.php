<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Recorded Event
 */
readonly class MconnConnectorTelemetryEventsGet
{
	public function __construct(
		public mixed $e = null,
		/** Sequence number, used to order events with the same timestamp */
		public ?float $n = null,
		/** Time the Event was recorded (seconds since the Unix epoch) */
		public ?float $t = null,
		/** Version */
		public ?string $v = null,
	) {
	}
}
