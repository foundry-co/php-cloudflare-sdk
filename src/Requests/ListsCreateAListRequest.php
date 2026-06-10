<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a list
 */
readonly class ListsCreateAListRequest
{
	public function __construct(
		/** The type of the list. Each type supports specific list items (IP addresses, ASNs, hostnames or redirects). */
		public \FoundryCo\Cloudflare\Enums\ListsCreateAListRequestKind $kind,
		/** An informative name for the list. Use this name in filter and rule expressions. */
		public string $name,
		/** An informative summary of the list. */
		public ?string $description = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'kind' => $this->kind->value,
		    'name' => $this->name,
		    'description' => $this->description,
		], fn ($v) => $v !== null);
	}
}
