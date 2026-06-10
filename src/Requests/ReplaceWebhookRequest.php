<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Replace a webhook
 */
readonly class ReplaceWebhookRequest
{
	public function __construct(
		/** Events that this webhook will get triggered by */
		public array $events,
		/** Name of the webhook */
		public string $name,
		/** URL this webhook will send events to */
		public string $url,
		/** Set whether or not the webhook should be active when created */
		public ?bool $enabled = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'events' => $this->events->value,
		    'name' => $this->name,
		    'url' => $this->url,
		    'enabled' => $this->enabled,
		], fn ($v) => $v !== null);
	}
}
