<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PagesProjectGetProject
{
	public function __construct(
		public ?PagesProjectGetProjectCanonicalDeployment $canonicalDeployment = null,
		/** When the project was created. */
		public ?\DateTimeImmutable $createdOn = null,
		/** Configs for deployments in a project. */
		public ?PagesProjectGetProjectDeploymentConfigs $deploymentConfigs = null,
		/** Framework the project is using. */
		public ?string $framework = null,
		/** Version of the framework the project is using. */
		public ?string $frameworkVersion = null,
		/** ID of the project. */
		public ?string $id = null,
		public ?PagesProjectGetProjectLatestDeployment $latestDeployment = null,
		/** Name of the project. */
		public ?string $name = null,
		/** Name of the preview script. */
		public ?string $previewScriptName = null,
		/** Production branch of the project. Used to identify production deployments. */
		public ?string $productionBranch = null,
		/** Name of the production script. */
		public ?string $productionScriptName = null,
		/** Whether the project uses functions. */
		public ?bool $usesFunctions = null,
		/** Configs for the project build process. */
		public ?PagesProjectGetProjectBuildConfig $buildConfig = null,
		/** A list of associated custom domains for the project. */
		public ?array $domains = null,
		/** Configs for the project source control. */
		public ?PagesProjectGetProjectSource $source = null,
		/** The Cloudflare subdomain associated with the project. */
		public ?string $subdomain = null,
	) {
	}
}
