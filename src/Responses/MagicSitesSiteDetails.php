<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicSitesSiteDetails
{
	public function __construct(
		/** Magic Connector identifier tag. */
		public ?string $connectorId = null,
		public ?string $description = null,
		/** Site high availability mode. If set to true, the site can have two connectors and runs in high availability mode. */
		public ?bool $haMode = null,
		/** Identifier */
		public ?string $id = null,
		/** Location of site in latitude and longitude. */
		public ?MagicSitesSiteDetailsLocation $location = null,
		/** The name of the site. */
		public ?string $name = null,
		/** Magic Connector identifier tag. Used when high availability mode is on. */
		public ?string $secondaryConnectorId = null,
	) {
	}
}
