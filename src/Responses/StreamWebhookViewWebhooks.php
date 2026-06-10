<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class StreamWebhookViewWebhooks
{
	public function __construct(
		/** The date and time the webhook was last modified. */
		public ?\DateTimeImmutable $modified = null,
		/** The URL where webhooks will be sent. */
		public ?string $notificationUrl = null,
		/** The secret used to verify webhook signatures. */
		public ?string $secret = null,
	) {
	}
}
