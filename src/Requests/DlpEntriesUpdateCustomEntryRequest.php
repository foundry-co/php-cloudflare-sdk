<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update custom entry
 */
readonly class DlpEntriesUpdateCustomEntryRequest
{
	public function __construct(
		public string $name,
		public \FoundryCo\Cloudflare\Responses\DlpEntriesUpdateCustomEntryRequestPattern $pattern,
		public bool $enabled,
		public ?string $description = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'pattern' => $this->pattern->toArray(),
		    'enabled' => $this->enabled,
		    'description' => $this->description,
		], fn ($v) => $v !== null);
	}
}
