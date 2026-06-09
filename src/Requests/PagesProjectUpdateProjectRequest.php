<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update project
 */
readonly class PagesProjectUpdateProjectRequest
{
	public function __construct(
		/** Configs for the project build process. */
		public ?\FoundryCo\Cloudflare\Responses\PagesProjectUpdateProjectRequestBuildConfig $buildConfig = null,
		/** Configs for deployments in a project. */
		public ?\FoundryCo\Cloudflare\Responses\PagesProjectUpdateProjectRequestDeploymentConfigs $deploymentConfigs = null,
		/** Name of the project. */
		public ?string $name = null,
		/** Production branch of the project. Used to identify production deployments. */
		public ?string $productionBranch = null,
		/** Configs for the project source control. */
		public ?\FoundryCo\Cloudflare\Responses\PagesProjectUpdateProjectRequestSource $source = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'build_config' => $this->buildConfig?->toArray(),
		    'deployment_configs' => $this->deploymentConfigs?->toArray(),
		    'name' => $this->name,
		    'production_branch' => $this->productionBranch,
		    'source' => $this->source?->toArray(),
		], fn ($v) => $v !== null);
	}
}
