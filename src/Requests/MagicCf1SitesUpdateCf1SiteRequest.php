<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update CF1 Site
 */
readonly class MagicCf1SitesUpdateCf1SiteRequest
{
	public function __construct(
		/** A human-provided description of the CF1 Site. */
		public ?string $description = null,
		public ?\FoundryCo\Cloudflare\Responses\MagicCf1SitesUpdateCf1SiteRequestLocation $location = null,
		/** A human-provided name describing the CF1 Site that should be unique within the account. */
		public ?string $name = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		    'location' => $this->location?->toArray(),
		    'name' => $this->name,
		], fn ($v) => $v !== null);
	}
}
