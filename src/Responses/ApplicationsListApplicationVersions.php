<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * An application with the configuration of its version
 */
readonly class ApplicationsListApplicationVersions
{
	public function __construct(
		/** Properties required to modify a cloudchamber deployment specified by the user. */
		public ApplicationsListApplicationVersionsConfiguration $configuration,
		public int $percentage,
		public int $version,
	) {
	}
}
