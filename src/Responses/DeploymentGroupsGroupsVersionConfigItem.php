<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DeploymentGroupsGroupsVersionConfigItem
{
	public function __construct(
		/** The target environment for the client version (e.g., windows, macos). */
		public string $targetEnvironment,
		/** The specific client version to deploy. */
		public string $version,
	) {
	}
}
