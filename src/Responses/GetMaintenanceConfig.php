<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Contains maintenance configuration and credential status.
 */
readonly class GetMaintenanceConfig
{
	public function __construct(
		/** Shows the credential configuration status. */
		public ?\FoundryCo\Cloudflare\Enums\GetMaintenanceConfigCredentialStatus $credentialStatus = null,
		/** Configures maintenance for the catalog. */
		public ?GetMaintenanceConfigMaintenanceConfig $maintenanceConfig = null,
	) {
	}
}
