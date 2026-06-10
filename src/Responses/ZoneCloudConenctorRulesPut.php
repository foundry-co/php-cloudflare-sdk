<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZoneCloudConenctorRulesPut
{
	public function __construct(
		public ?string $description = null,
		public ?bool $enabled = null,
		public ?string $expression = null,
		public ?string $id = null,
		/** Parameters of Cloud Connector Rule */
		public ?ZoneCloudConenctorRulesPutParameters $parameters = null,
		/** Cloud Provider type */
		public ?\FoundryCo\Cloudflare\Enums\ZoneCloudConenctorRulesPutProvider $provider = null,
	) {
	}
}
