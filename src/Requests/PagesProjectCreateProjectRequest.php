<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create project
 */
readonly class PagesProjectCreateProjectRequest
{
	public function __construct(
		/** Name of the project. */
		public string $name,
		/** Production branch of the project. Used to identify production deployments. */
		public string $productionBranch,
		/** Configs for the project build process. */
		public ?\FoundryCo\Cloudflare\Responses\PagesProjectCreateProjectRequestBuildConfig $buildConfig = null,
		/** Configs for deployments in a project. */
		public ?\FoundryCo\Cloudflare\Responses\PagesProjectCreateProjectRequestDeploymentConfigs $deploymentConfigs = null,
		/** Configs for the project source control. */
		public ?\FoundryCo\Cloudflare\Responses\PagesProjectCreateProjectRequestSource $source = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'production_branch' => $this->productionBranch,
		    'build_config' => $this->buildConfig?->toArray(),
		    'deployment_configs' => $this->deploymentConfigs?->toArray(),
		    'source' => $this->source?->toArray(),
		], fn ($v) => $v !== null);
	}
}
