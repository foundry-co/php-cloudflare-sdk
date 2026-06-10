<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Event Subscription
 */
readonly class SubscriptionsPatchRequest
{
	public function __construct(
		/** Destination configuration for the subscription */
		public mixed $destination = null,
		/** Whether the subscription is active */
		public ?bool $enabled = null,
		/** List of event types this subscription handles */
		public ?array $events = null,
		/** Name of the subscription */
		public ?string $name = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'destination' => $this->destination,
		    'enabled' => $this->enabled,
		    'events' => $this->events,
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
