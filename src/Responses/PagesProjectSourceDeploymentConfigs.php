<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configs for deployments in a project.
 */
readonly class PagesProjectSourceDeploymentConfigs
{
	public function __construct(
		/** Configs for preview deploys. */
		public PagesProjectSourceDeploymentConfigsPreview $preview,
		/** Configs for production deploys. */
		public PagesProjectSourceDeploymentConfigsProduction $production,
	) {
	}
}
