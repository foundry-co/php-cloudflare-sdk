<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MconnConnectorTelemetryEventsListItemsItem
{
	public function __construct(
		/** Time the Event was collected (seconds since the Unix epoch) */
		public ?float $a = null,
		/** Kind */
		public ?string $k = null,
		/** Sequence number, used to order events with the same timestamp */
		public ?float $n = null,
		/** Time the Event was recorded (seconds since the Unix epoch) */
		public ?float $t = null,
	) {
	}
}
