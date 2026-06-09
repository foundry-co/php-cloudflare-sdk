<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Additional info about the trigger.
 */
readonly class PagesProjectSourceCanonicalDeploymentDeploymentTriggerMetadata
{
	public function __construct(
		/** Where the trigger happened. */
		public string $branch,
		/** Whether the deployment trigger commit was dirty. */
		public bool $commitDirty,
		/** Hash of the deployment trigger commit. */
		public string $commitHash,
		/** Message of the deployment trigger commit. */
		public string $commitMessage,
	) {
	}
}
