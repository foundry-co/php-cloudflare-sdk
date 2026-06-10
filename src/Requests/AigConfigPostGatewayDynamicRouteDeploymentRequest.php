<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new AI Gateway Dynamic Route Deployment.
 */
readonly class AigConfigPostGatewayDynamicRouteDeploymentRequest
{
	public function __construct(
		public string $versionId,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'version_id' => $this->versionId,
		], fn ($v) => $v !== null);
	}
}
