<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new Site
 */
readonly class MagicSitesCreateSiteRequest
{
	public function __construct(
		/** The name of the site. */
		public string $name,
		/** Magic Connector identifier tag. */
		public ?string $connectorId = null,
		public ?string $description = null,
		/** Site high availability mode. If set to true, the site can have two connectors and runs in high availability mode. */
		public ?bool $haMode = null,
		/** Location of site in latitude and longitude. */
		public ?\FoundryCo\Cloudflare\Responses\MagicSitesCreateSiteRequestLocation $location = null,
		/** Magic Connector identifier tag. Used when high availability mode is on. */
		public ?string $secondaryConnectorId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'connector_id' => $this->connectorId,
		    'description' => $this->description,
		    'ha_mode' => $this->haMode,
		    'location' => $this->location?->toArray(),
		    'secondary_connector_id' => $this->secondaryConnectorId,
		], fn ($v) => $v !== null);
	}
}
