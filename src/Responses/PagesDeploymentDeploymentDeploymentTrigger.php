<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Info about what caused the deployment.
 */
readonly class PagesDeploymentDeploymentDeploymentTrigger
{
	public function __construct(
		/** Additional info about the trigger. */
		public PagesDeploymentDeploymentDeploymentTriggerMetadata $metadata,
		/** What caused the deployment. */
		public \FoundryCo\Cloudflare\Enums\PagesDeploymentDeploymentDeploymentTriggerType $type,
	) {
	}
}
