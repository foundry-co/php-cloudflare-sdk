<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configs for the project source control.
 */
readonly class PagesProjectGetProjectsLatestDeploymentSource
{
	public function __construct(
		public ?PagesProjectGetProjectsLatestDeploymentSourceConfig $config = null,
		/** The source control management provider. */
		public ?\FoundryCo\Cloudflare\Enums\PagesProjectGetProjectsLatestDeploymentSourceType $type = null,
	) {
	}
}
