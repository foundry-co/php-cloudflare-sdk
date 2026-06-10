<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Edit a webhook
 */
readonly class EditWebhookRequest
{
	public function __construct(
		public ?bool $enabled = null,
		/** Events that the webhook will get triggered by */
		public ?array $events = null,
		/** Name of the webhook */
		public ?string $name = null,
		/** URL the webhook will send events to */
		public ?string $url = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'enabled' => $this->enabled,
		    'events' => $this->events?->value,
		    'name' => $this->name,
		    'url' => $this->url,
		], fn ($v) => $v !== null);
	}
}
