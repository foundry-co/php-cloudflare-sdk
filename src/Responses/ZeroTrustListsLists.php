<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZeroTrustListsLists
{
	public function __construct(
		/** Indicate the number of items in the list. */
		public ?float $count = null,
		public ?\DateTimeImmutable $createdAt = null,
		/** Provide the list description. */
		public ?string $description = null,
		/** Identify the API resource with a UUID. */
		public ?string $id = null,
		/** Provide the list items. */
		public ?array $items = null,
		/** Specify the list name. */
		public ?string $name = null,
		/** Specify the list type. */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustListsListsType $type = null,
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
