<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PagesProjectProjectsCanonicalDeployment
{
	public function __construct(
		/** A list of alias URLs pointing to this deployment. */
		public array $aliases,
		public array $buildConfig,
		/** When the deployment was created. */
		public \DateTimeImmutable $createdOn,
		/** Info about what caused the deployment. */
		public PagesProjectProjectsCanonicalDeploymentDeploymentTrigger $deploymentTrigger,
		public array $envVars,
		/** Type of deploy. */
		public \FoundryCo\Cloudflare\Enums\PagesProjectProjectsCanonicalDeploymentEnvironment $environment,
		/** Id of the deployment. */
		public string $id,
		/** If the deployment has been skipped. */
		public bool $isSkipped,
		public array $latestStage,
		/** When the deployment was last modified. */
		public \DateTimeImmutable $modifiedOn,
		/** Id of the project. */
		public string $projectId,
		public array $projectName,
		/** Short Id (8 character) of the deployment. */
		public string $shortId,
		public array $source,
		/** List of past stages. */
		public array $stages,
		/** The live URL to view this deployment. */
		public string $url,
		/** Whether the deployment uses functions. */
		public ?bool $usesFunctions = null,
	) {
	}
}
