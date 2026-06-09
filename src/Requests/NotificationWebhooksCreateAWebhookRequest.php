<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a webhook
 */
readonly class NotificationWebhooksCreateAWebhookRequest
{
	public function __construct(
		/** The name of the webhook destination. This will be included in the request body when you receive a webhook notification. */
		public string $name,
		/** The POST endpoint to call when dispatching a notification. */
		public string $url,
		/** Optional secret that will be passed in the `cf-webhook-auth` header when dispatching generic webhook notifications or formatted for supported destinations. Secrets are not returned in any API response body. */
		public ?string $secret = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'url' => $this->url,
		    'secret' => $this->secret,
		], fn ($v) => $v !== null);
	}
}
