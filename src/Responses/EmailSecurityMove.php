<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityMove
{
	public function __construct(
		/** When the move operation completed (UTC) */
		public ?\DateTimeImmutable $completedAt = null,
		/** Deprecated, use `completed_at` instead. End of life: November 1, 2026. */
		public ?\DateTimeImmutable $completedTimestamp = null,
		/** Destination folder for the message */
		public ?string $destination = null,
		/** Number of items moved. End of life: November 1, 2026. */
		public ?int $itemCount = null,
		/** Message identifier */
		public ?string $messageId = null,
		/** Type of operation performed */
		public ?string $operation = null,
		/** Recipient email address */
		public ?string $recipient = null,
		/** Operation status */
		public ?string $status = null,
	) {
	}
}
