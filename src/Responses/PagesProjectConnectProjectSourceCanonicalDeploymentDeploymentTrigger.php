<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Info about what caused the deployment.
 */
readonly class PagesProjectConnectProjectSourceCanonicalDeploymentDeploymentTrigger
{
	public function __construct(
		/** Additional info about the trigger. */
		public ?PagesProjectConnectProjectSourceCanonicalDeploymentDeploymentTriggerMetadata $metadata = null,
		/** What caused the deployment. */
		public ?\FoundryCo\Cloudflare\Enums\PagesProjectConnectProjectSourceCanonicalDeploymentDeploymentTriggerType $type = null,
	) {
	}
}
