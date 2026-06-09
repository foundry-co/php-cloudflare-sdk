<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerDeploymentsDeploymentAnnotations
{
	public function __construct(
		/** Human-readable message about the deployment. Truncated to 1000 bytes if longer. */
		public ?string $workersmessage = null,
		/** Operation that triggered the creation of the deployment. */
		public ?string $workerstriggeredBy = null,
	) {
	}
}
