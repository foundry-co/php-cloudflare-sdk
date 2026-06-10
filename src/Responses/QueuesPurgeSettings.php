<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class QueuesPurgeSettings
{
	public function __construct(
		/** Number of seconds to delay delivery of all messages to consumers. */
		public ?float $deliveryDelay = null,
		/** Indicates if message delivery to consumers is currently paused. */
		public ?bool $deliveryPaused = null,
		/** Number of seconds after which an unconsumed message will be delayed. */
		public ?float $messageRetentionPeriod = null,
	) {
	}
}
