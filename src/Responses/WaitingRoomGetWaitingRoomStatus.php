<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WaitingRoomGetWaitingRoomStatus
{
	public function __construct(
		public ?int $estimatedQueuedUsers = null,
		public ?int $estimatedTotalActiveUsers = null,
		public ?string $eventId = null,
		public ?int $maxEstimatedTimeMinutes = null,
		public ?\FoundryCo\Cloudflare\Enums\WaitingRoomGetWaitingRoomStatusStatus $status = null,
	) {
	}
}
