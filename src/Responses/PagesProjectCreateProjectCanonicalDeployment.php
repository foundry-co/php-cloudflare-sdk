<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PagesProjectCreateProjectCanonicalDeployment
{
	public function __construct(
		/** A list of alias URLs pointing to this deployment. */
		public ?array $aliases = null,
		/** Configs for the project build process. */
		public ?PagesProjectCreateProjectCanonicalDeploymentBuildConfig $buildConfig = null,
		/** When the deployment was created. */
		public ?\DateTimeImmutable $createdOn = null,
		/** Info about what caused the deployment. */
		public ?PagesProjectCreateProjectCanonicalDeploymentDeploymentTrigger $deploymentTrigger = null,
		/** Environment variables used for builds and Pages Functions. */
		public ?array $envVars = null,
		/** Type of deploy. */
		public ?\FoundryCo\Cloudflare\Enums\PagesProjectCreateProjectCanonicalDeploymentEnvironment $environment = null,
		/** Id of the deployment. */
		public ?string $id = null,
		/** If the deployment has been skipped. */
		public ?bool $isSkipped = null,
		/** The status of the deployment. */
		public ?PagesProjectCreateProjectCanonicalDeploymentLatestStage $latestStage = null,
		/** When the deployment was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** Id of the project. */
		public ?string $projectId = null,
		/** Name of the project. */
		public ?string $projectName = null,
		/** Short Id (8 character) of the deployment. */
		public ?string $shortId = null,
		/** Configs for the project source control. */
		public ?PagesProjectCreateProjectCanonicalDeploymentSource $source = null,
		/** List of past stages. */
		public ?array $stages = null,
		/** The live URL to view this deployment. */
		public ?string $url = null,
		/** Whether the deployment uses functions. */
		public ?bool $usesFunctions = null,
	) {
	}
}
