<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PagesProjectProjects
{
	public function __construct(
		public PagesProjectProjectsCanonicalDeployment $canonicalDeployment,
		/** When the project was created. */
		public \DateTimeImmutable $createdOn,
		/** Configs for deployments in a project. */
		public PagesProjectProjectsDeploymentConfigs $deploymentConfigs,
		/** Framework the project is using. */
		public string $framework,
		/** Version of the framework the project is using. */
		public string $frameworkVersion,
		/** ID of the project. */
		public string $id,
		public PagesProjectProjectsLatestDeployment $latestDeployment,
		/** Name of the project. */
		public string $name,
		/** Name of the preview script. */
		public string $previewScriptName,
		/** Production branch of the project. Used to identify production deployments. */
		public string $productionBranch,
		/** Name of the production script. */
		public string $productionScriptName,
		/** Whether the project uses functions. */
		public bool $usesFunctions,
		/** Configs for the project build process. */
		public ?PagesProjectProjectsBuildConfig $buildConfig = null,
		/** A list of associated custom domains for the project. */
		public ?array $domains = null,
		/** Configs for the project source control. */
		public ?PagesProjectProjectsSource $source = null,
		/** The Cloudflare subdomain associated with the project. */
		public ?string $subdomain = null,
	) {
	}
}
