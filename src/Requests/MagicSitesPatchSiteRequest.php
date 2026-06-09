<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Patch Site
 */
readonly class MagicSitesPatchSiteRequest
{
	public function __construct(
		/** Magic Connector identifier tag. */
		public ?string $connectorId = null,
		public ?string $description = null,
		/** Location of site in latitude and longitude. */
		public ?\FoundryCo\Cloudflare\Responses\MagicSitesPatchSiteRequestLocation $location = null,
		/** The name of the site. */
		public ?string $name = null,
		/** Magic Connector identifier tag. Used when high availability mode is on. */
		public ?string $secondaryConnectorId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'connector_id' => $this->connectorId,
		    'description' => $this->description,
		    'location' => $this->location?->toArray(),
		    'name' => $this->name,
		    'secondary_connector_id' => $this->secondaryConnectorId,
		], fn ($v) => $v !== null);
	}
}
