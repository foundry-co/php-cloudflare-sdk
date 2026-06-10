<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Additional info about the trigger.
 */
readonly class PagesDeploymentGetDeploymentInfoDeploymentTriggerMetadata
{
	public function __construct(
		/** Where the trigger happened. */
		public ?string $branch = null,
		/** Whether the deployment trigger commit was dirty. */
		public ?bool $commitDirty = null,
		/** Hash of the deployment trigger commit. */
		public ?string $commitHash = null,
		/** Message of the deployment trigger commit. */
		public ?string $commitMessage = null,
	) {
	}
}
