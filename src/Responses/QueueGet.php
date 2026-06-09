<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class QueueGet
{
	public function __construct(
		/** When the subscription was created */
		public \DateTimeImmutable $createdAt,
		/** Destination configuration for the subscription */
		public mixed $destination,
		/** Whether the subscription is active */
		public bool $enabled,
		/** List of event types this subscription handles */
		public array $events,
		/** Unique identifier for the subscription */
		public string $id,
		/** When the subscription was last modified */
		public \DateTimeImmutable $modifiedAt,
		/** Name of the subscription */
		public string $name,
		/** Source configuration for the subscription */
		public mixed $source,
	) {
	}
}
