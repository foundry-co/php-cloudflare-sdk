<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class NotificationWebhooksWebhooks
{
	public function __construct(
		/** Timestamp of when the webhook destination was created. */
		public ?\DateTimeImmutable $createdAt = null,
		/** The unique identifier of a webhook */
		public ?string $id = null,
		/** Timestamp of the last time an attempt to dispatch a notification to this webhook failed. */
		public ?\DateTimeImmutable $lastFailure = null,
		/** Timestamp of the last time Cloudflare was able to successfully dispatch a notification using this webhook. */
		public ?\DateTimeImmutable $lastSuccess = null,
		/** The name of the webhook destination. This will be included in the request body when you receive a webhook notification. */
		public ?string $name = null,
		/** Optional secret that will be passed in the `cf-webhook-auth` header when dispatching generic webhook notifications or formatted for supported destinations. Secrets are not returned in any API response body. */
		public ?string $secret = null,
		/** Type of webhook endpoint. */
		public ?\FoundryCo\Cloudflare\Enums\NotificationWebhooksWebhooksType $type = null,
		/** The POST endpoint to call when dispatching a notification. */
		public ?string $url = null,
	) {
	}
}
