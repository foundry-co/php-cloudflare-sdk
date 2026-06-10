<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UpdateDeploymentGroupRequestVersionConfigItem
{
	public function __construct(
		/** The target environment for the client version (e.g., windows, macos). */
		public ?string $targetEnvironment = null,
		/** The specific client version to deploy. */
		public ?string $version = null,
	) {
	}
}
