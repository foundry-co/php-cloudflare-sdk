<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PagesDeploymentInfo
{
	public function __construct(
		/** A list of alias URLs pointing to this deployment. */
		public array $aliases,
		/** Configs for the project build process. */
		public PagesDeploymentInfoBuildConfig $buildConfig,
		/** When the deployment was created. */
		public \DateTimeImmutable $createdOn,
		/** Info about what caused the deployment. */
		public PagesDeploymentInfoDeploymentTrigger $deploymentTrigger,
		/** Environment variables used for builds and Pages Functions. */
		public array $envVars,
		/** Type of deploy. */
		public \FoundryCo\Cloudflare\Enums\PagesDeploymentInfoEnvironment $environment,
		/** Id of the deployment. */
		public string $id,
		/** If the deployment has been skipped. */
		public bool $isSkipped,
		/** The status of the deployment. */
		public PagesDeploymentInfoLatestStage $latestStage,
		/** When the deployment was last modified. */
		public \DateTimeImmutable $modifiedOn,
		/** Id of the project. */
		public string $projectId,
		/** Name of the project. */
		public string $projectName,
		/** Short Id (8 character) of the deployment. */
		public string $shortId,
		/** Configs for the project source control. */
		public PagesDeploymentInfoSource $source,
		/** List of past stages. */
		public array $stages,
		/** The live URL to view this deployment. */
		public string $url,
		/** Whether the deployment uses functions. */
		public ?bool $usesFunctions = null,
	) {
	}
}
