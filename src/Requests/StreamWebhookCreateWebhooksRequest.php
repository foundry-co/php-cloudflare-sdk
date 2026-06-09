<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create webhooks
 */
readonly class StreamWebhookCreateWebhooksRequest
{
	public function __construct(
		/** The URL where webhooks will be sent. */
		public ?string $notificationUrl = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'notificationUrl' => $this->notificationUrl,
		    'notification_url' => $this->notificationUrl,
		], fn ($v) => $v !== null);
	}
}
