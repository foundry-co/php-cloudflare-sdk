<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Zero Trust list
 */
readonly class ZeroTrustListsCreateZeroTrustListRequest
{
	public function __construct(
		/** Specify the list name. */
		public string $name,
		/** Specify the list type. */
		public \FoundryCo\Cloudflare\Enums\ZeroTrustListsCreateZeroTrustListRequestType $type,
		/** Provide the list description. */
		public ?string $description = null,
		/** Add items to the list. */
		public ?array $items = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'type' => $this->type->value,
		    'description' => $this->description,
		    'items' => $this->items,
		], fn ($v) => $v !== null);
	}
}
