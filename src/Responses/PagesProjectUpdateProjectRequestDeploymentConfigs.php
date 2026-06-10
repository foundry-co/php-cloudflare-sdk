<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configs for deployments in a project.
 */
readonly class PagesProjectUpdateProjectRequestDeploymentConfigs
{
	public function __construct(
		/** Configs for preview deploys. */
		public ?PagesProjectUpdateProjectRequestDeploymentConfigsPreview $preview = null,
		/** Configs for production deploys. */
		public ?PagesProjectUpdateProjectRequestDeploymentConfigsProduction $production = null,
	) {
	}
}
