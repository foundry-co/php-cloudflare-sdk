<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The status of the deployment.
 */
readonly class PagesDeploymentDeploymentLatestStage
{
	public function __construct(
		/** When the stage ended. */
		public \DateTimeImmutable $endedOn,
		/** The current build stage. */
		public \FoundryCo\Cloudflare\Enums\PagesDeploymentDeploymentLatestStageName $name,
		/** When the stage started. */
		public \DateTimeImmutable $startedOn,
		/** State of the current stage. */
		public \FoundryCo\Cloudflare\Enums\PagesDeploymentDeploymentLatestStageStatus $status,
	) {
	}
}
