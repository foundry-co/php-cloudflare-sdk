<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Contains maintenance configuration and credential status.
 */
readonly class MaintenanceConfigurationConfig
{
	public function __construct(
		/** Shows the credential configuration status. */
		public \FoundryCo\Cloudflare\Enums\MaintenanceConfigurationConfigCredentialStatus $credentialStatus,
		/** Configures maintenance for the catalog. */
		public MaintenanceConfigurationConfigMaintenanceConfig $maintenanceConfig,
	) {
	}
}
