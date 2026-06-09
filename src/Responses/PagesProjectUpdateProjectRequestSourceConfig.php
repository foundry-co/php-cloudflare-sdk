<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PagesProjectUpdateProjectRequestSourceConfig
{
	public function __construct(
		/**
		 * Whether to enable automatic deployments when pushing to the source repository.
		 * When disabled, no deployments (production or preview) will be triggered automatically.
		 */
		public ?bool $deploymentsEnabled = null,
		/** The owner of the repository. */
		public ?string $owner = null,
		/** The owner ID of the repository. */
		public ?string $ownerId = null,
		/** A list of paths that should be excluded from triggering a preview deployment. Wildcard syntax (`*`) is supported. */
		public ?array $pathExcludes = null,
		/** A list of paths that should be watched to trigger a preview deployment. Wildcard syntax (`*`) is supported. */
		public ?array $pathIncludes = null,
		/** Whether to enable PR comments. */
		public ?bool $prCommentsEnabled = null,
		/** A list of branches that should not trigger a preview deployment. Wildcard syntax (`*`) is supported. Must be used with `preview_deployment_setting` set to `custom`. */
		public ?array $previewBranchExcludes = null,
		/** A list of branches that should trigger a preview deployment. Wildcard syntax (`*`) is supported. Must be used with `preview_deployment_setting` set to `custom`. */
		public ?array $previewBranchIncludes = null,
		/** Controls whether commits to preview branches trigger a preview deployment. */
		public ?\FoundryCo\Cloudflare\Enums\PagesProjectUpdateProjectRequestSourceConfigPreviewDeploymentSetting $previewDeploymentSetting = null,
		/** The production branch of the repository. */
		public ?string $productionBranch = null,
		/** Whether to trigger a production deployment on commits to the production branch. */
		public ?bool $productionDeploymentsEnabled = null,
		/** The ID of the repository. */
		public ?string $repoId = null,
		/** The name of the repository. */
		public ?string $repoName = null,
	) {
	}
}
