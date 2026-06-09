<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create custom entry
 */
readonly class DlpEntriesCreateEntryRequest
{
	public function __construct(
		public bool $enabled,
		public string $name,
		public \FoundryCo\Cloudflare\Responses\DlpEntriesCreateEntryRequestPattern $pattern,
		public ?string $description = null,
		public ?string $profileId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'enabled' => $this->enabled,
		    'name' => $this->name,
		    'pattern' => $this->pattern->toArray(),
		    'description' => $this->description,
		    'profile_id' => $this->profileId,
		], fn ($v) => $v !== null);
	}
}
