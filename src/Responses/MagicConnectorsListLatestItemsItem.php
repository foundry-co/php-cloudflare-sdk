<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Recorded Event
 */
readonly class MagicConnectorsListLatestItemsItem
{
	public function __construct(
		public mixed $e,
		/** Sequence number, used to order events with the same timestamp */
		public float $n,
		/** Time the Event was recorded (seconds since the Unix epoch) */
		public float $t,
		/** Version */
		public ?string $v = null,
	) {
	}
}
