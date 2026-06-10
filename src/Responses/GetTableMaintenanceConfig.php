<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Contains table maintenance configuration.
 */
readonly class GetTableMaintenanceConfig
{
	public function __construct(
		/** Configures maintenance for the table. */
		public ?GetTableMaintenanceConfigMaintenanceConfig $maintenanceConfig = null,
	) {
	}
}
