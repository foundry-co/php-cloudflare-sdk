<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class SubscriptionsPatch
{
	public function __construct(
		/** When the subscription was created */
		public ?\DateTimeImmutable $createdAt = null,
		/** Destination configuration for the subscription */
		public mixed $destination = null,
		/** Whether the subscription is active */
		public ?bool $enabled = null,
		/** List of event types this subscription handles */
		public ?array $events = null,
		/** Unique identifier for the subscription */
		public ?string $id = null,
		/** When the subscription was last modified */
		public ?\DateTimeImmutable $modifiedAt = null,
		/** Name of the subscription */
		public ?string $name = null,
		/** Source configuration for the subscription */
		public mixed $source = null,
	) {
	}
}
