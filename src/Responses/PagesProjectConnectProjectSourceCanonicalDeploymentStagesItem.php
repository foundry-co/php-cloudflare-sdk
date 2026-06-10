<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The status of the deployment.
 */
readonly class PagesProjectConnectProjectSourceCanonicalDeploymentStagesItem
{
	public function __construct(
		/** When the stage ended. */
		public ?\DateTimeImmutable $endedOn = null,
		/** The current build stage. */
		public ?\FoundryCo\Cloudflare\Enums\PagesProjectConnectProjectSourceCanonicalDeploymentStagesItemName $name = null,
		/** When the stage started. */
		public ?\DateTimeImmutable $startedOn = null,
		/** State of the current stage. */
		public ?\FoundryCo\Cloudflare\Enums\PagesProjectConnectProjectSourceCanonicalDeploymentStagesItemStatus $status = null,
	) {
	}
}
